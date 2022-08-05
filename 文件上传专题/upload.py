#encoding:utf-8
import requests
import base64

url = "http://"


filename = "123.php"
payload = '''123123'''

files = [('file',(filename, payload, 'image/gif'))]
r = requests.post(url=url, files=files)
print(r.text)