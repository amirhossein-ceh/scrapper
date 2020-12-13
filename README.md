# How to run ? ✅

1. clone the project
2. go to /node/server.js [server.js](https://github.com/amirhossein-ceh/scrapper/blob/master/node/server.js)
3. run ``` sudo node server.js OR node server.js ```
4. project will run on 8002 port ``` localhost:8002/scrape```
5. run laravel ``` php artisan serve ```
6. laravel will run server on ```localhost/data-scraping```
7. have fun and take care :)

## Usage
open /node/server.js [server.js](https://github.com/amirhossein-ceh/scrapper/blob/master/node/server.js)

go to this part of code

```javascript

1. app.get('/scrape', function (req, res) {

2.     request('https://news.ycombinator.com', function (error, response, html) {
3.         if (!error && response.statusCode === 200) {
4.            var $ = cheerio.load(html);
5.             var parsedResults = [];
```
paste your URL on line 2 , then read [CHEERIO](https://www.npmjs.com/package/cheerio) documents 😉
