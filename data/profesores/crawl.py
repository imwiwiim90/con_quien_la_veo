import requests
from bs4 import BeautifulSoup 

s = requests.Session()
r = s.get('http://ingenieria.javeriana.edu.co/docencia-sistemas')
soup = BeautifulSoup(r.text,'html.parser')

f = open('test.html','w')
f.write(r.text.encode('latin-1'))
f.close()