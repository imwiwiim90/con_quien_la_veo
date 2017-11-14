import requests
from bs4 import BeautifulSoup 

s = requests.Session()
r = s.get('http://ingenieria.javeriana.edu.co/docencia-sistemas')
soup = BeautifulSoup(r.text,'html.parser')
divs = soup.select(".journal-content-article")[:-3]

def save_image(filename,url):
	r = requests.get(url,stream=True)
	with open(filename, 'wb') as f:
		for chunk in r.iter_content(1024):
			f.write(chunk)
	f.close()

names = []
for d in divs:
	name = d.find(id='tituloadmin').get_text().encode('latin-1')
	url = 'http://ingenieria.javeriana.edu.co/' + d.find('img')['src']
	names.append(name)
	save_image(name+".jpeg",url)
f = open('names.txt','w')
for name in names:
	f.write(name+'\n')
f.close()
