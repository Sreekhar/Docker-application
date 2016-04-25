Cloud-Computing-Assignment-2
============================

This is a repository to share code regarding the Assignment two

Future Team members
1. Kakamany Satya Harshavardhan
2. Mallepalli Rakesh Reddy
3. Sai Pradeep Chokka Sudharsan
4. Sreekhar Ale

This application allows you to search the number of times a word appeared in a paragraph and it's corresponding analytics! (Min. of 5 words atleast)

Number of words in a text?

Method: POST
___________

Url: webservices/analytics.php
Returns: JSON array (4 outputs 1. Unique words 2. Longest Word 3. Smallest Word 4. Vowel Count)

EXAMPLE USAGE:
______________

$ curl http://IP_ADDRESS:8080/index.php
Result - Send a collection of large text to see better analytics

Working of the webpage -
______________________
Collect users input and data is processed in the webservice for finding out the analytics and displays back the output. Method used was POST and the output is returned in json array

Languages used: HTML%, PHP3 and CSS3

FUTURE WORK
___________

1. The project can be extended by using a database and storing all the values users use to find out the analytics to.
2. Once the users keep sending data for displaying their own analytics, all the text info will be saved in the database.
3. Depending on the data collected we can display the analytics in a more improvised way
  a. Most frequently word searched
  b. A graph of top most occured word in a large data of text
  c. Longest/Smallest word even occured.
  d. How much amount of text on an average a user searches
and many more...

Example for starting this container:

docker run -d -p 8000:80 web /startme.sh
This will start the container, the webserver, and forward traffic to your port into the container.
