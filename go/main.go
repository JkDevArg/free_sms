package main

import (
	"fmt"
	"io/ioutil"
	"net/http"
	"net/url"
)

func main() {
	http.HandleFunc("/send-message", func(w http.ResponseWriter, r *http.Request) {
		if r.Method == "POST" {
			phone := r.FormValue("phone")
			message := r.FormValue("message")
			key := "textbelt"

			resp, err := http.PostForm("https://textbelt.com/text", url.Values{
				"phone":   {phone},
				"message": {message},
				"key":     {key},
			})

			body, err := ioutil.ReadAll(resp.Body)
			if err != nil {
				fmt.Fprintf(w, "Error: %v", err)
				return
			}

			defer resp.Body.Close()

			fmt.Fprintf(w, "Response: %s", body)
		} else {
			fmt.Fprintf(w, "Hello, please send a POST request with phone and number parameters.")
		}
	})

	http.ListenAndServe(":8080", nil)
}
