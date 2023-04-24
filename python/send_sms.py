import re
import os
import time
import platform
import base64
import requests


print("[*] Welcome")

def init():
    print('''
      \n    1. Your Country Code Must Be without +
    2. Country Code Example: 91
    3. Your Phone Number Must be Start Without 0
    4. Full Usage: 915103030303
    ..........NOTE: Only One Text Message Is Allowed Per Day...........
      ''')
    send_sms()

def send_sms():
    p = input("\n[*] Enter Your Number:- ")
    m = input("\n[*] Enter Your Message:- ")
    message = base64.b64decode('aHR0cHM6Ly90ZXh0YmVsdC5jb20vdGV4dA=='.encode('ascii')).decode('ascii')
    resp = requests.post(f'{message}', {
        'phone': p,
        'message': m,
        'key': 'textbelt',
    })
    print("\n[*] Sending message ")
    time.sleep(2)
    z = str(resp.json())
    n = 'False'
    if re.search(n, z):
        print('\n[ X ] Message not sent! Verify your number is valid and check your connection Internet!')
    else:
        print(f'\n[ ✔ ] Message sent To:- {p}')

init()
