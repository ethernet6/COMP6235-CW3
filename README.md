# COMP6235-Coursework
This is the repository for the group "404 Group Not Found" which will have the source code of CW3 of "COMP6235 - Foundations of Data Science".

# About web app
This is an application about fuel economy calculation, recommendation and comparaison. It is written in PHP (backend) and Javascript (frontend). The database used is a MySQL database. The code added here is public and won't be removed later on.

# Relevant Source Code
The relevant source code can be found inside 'PHP Source Code' which is the source code and base code for our web app! Feel free to check it.

# Screenshot
## Comparaison Page
![Comparaison Page Screenshot](https://cdn.georgechalhoub.com/academia/soton/comp6235/assignments/cw3/website/screenshot1.png)
 
## Recommendation Page
![Recommendation Page Screenshot](https://cdn.georgechalhoub.com/academia/soton/comp6235/assignments/cw3/website/screenshot3.png)

 # Public Link for App 
Self-hosted! The public web app is: comp6235.nrhl.org. If you wish to compile and run it on your machine (you really don't have to), follow the instructions below. 

# Security Practices
 - We would never embed authentication information in application source code and requests to do so are denied.  Credentials to access the public web application defined outside the application using an environment variable.
 
 - The web app is supposed to accessed only with HTTPS. HTTP requests may redirected to HTTPS.

 # How to run on your location machine
 
The first thing you need to is install MAMP PRO. It is available at this link: https://www.mamp.info/en/. If you run by problems anywhere check their documentation here: https://www.mamp.info/en/documentation/. 

Supposing you have installed MAMP PRO as recommended previously, you will have phpMyAdmin and installed configured by default.  
 
 1. Import the database file db.sql to phpMyAdmin. Importing is easy and done by the GUI. 
 2. Open the file conn.php inside 'PHP Source Code' and add the authentication information (such as database IP, database username and database password). 
 2. Add the folder 'PHP Source Code' to the MAMP local directory.
 3. Run MAMP 
 4. Run localhost:8888/PHP Source Code or localhost/PHP Source Code 
 
 # Browser Support
 This app is tested and working with the latest version of Google Chome. It should work well with modern browsers such as Safari, Edge, Opera and Firefox. There is absolutely no support for Internet Explorer and this app is not tested on any version of Internet Explorer.

# Group Members
 - George Chalhoub - gc7g17@soton.ac.uk 
 - Qi Zhang - qz5n17@soton.ac.uk
 - Fangfei Liu - fl1m17@soton.ac.uk
 - Xiaoming Li - xl9u17@soton.ac.uk
 - James Purcell - jtp1u17@soton.ac.uk 
 

