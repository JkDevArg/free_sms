# API on GO

Change key on ```main.go``` en la func main()

Line 20: ```"key":     {key},```

```go run main.go```


### How to use
Use Postman:
URL: ```http://localhost:8080/send-message```

PARAM: ```?phone=1234567890```

QUERY: ```&message=Hello%20world```

or cURL

```curl -X POST -d "phone=1234567890&number=Hello%20world" http://localhost:8080/send-message?```
