## NASA APP Astronomy Picture of the Day<br />

This is an app to fetch data from NASA APIs 'Astronomy Picture of the Day' and display it on the front page.<br /><br />
<img src="https://res.cloudinary.com/machikolacey/image/upload/v1688940559/nasaapp/image1_lhdbuy.jpg" style="width:400px;" />
<br />

## Features<br />
1. When the front page is loaded, ApodController will check if there is already a data from today in the database table 'apod'.
2. If no data is found, it will fetch the data from NASA's API 'Astronomy Picture of the Day'
3. It will save data to the database table 'apod'.
4. The frontend will be loaded with the main image and explanation.
5. Past images will be added on the bottom of the page (If database seeder is used, it will display 8 images)
6. When a user clicks on 'Change background image' button, it will change background colour using Vue component.
7. When a user clicks on a thumbnail of past image, it will display a view page of this image. 


<br />
## Technologies<br />
<br />
<ul>
<li>Laravel</li>
<li>Node</li>
<li>MySQL</li>
<li>Vue</li>
<li>Javascript</li>
<li>Bootstrap</li>
</ul>

## Node modules<br />
<ul>
<li>laravel-mix</li>
<li>sass</li>
<li>carbon</li>
<li>moment</li>
<li>vue</li>
</ul>





