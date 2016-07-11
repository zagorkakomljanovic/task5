# How to run this application



- Make sure you have [docker and docker-compose installed](http://www.spiralout.eu/2015/12/docker-installation-in-linux-mint-and.html) 
- clone this repo: ` git clone https://github.com/SpiralOutDotEu/dockervel.git`
- `git checkout builder`
- git clone my  repo  in your dockervel folder with : git clone https://github.com/zagorkakomljanovic/task5.git
- rename task5 to www
- `cd dockervel`
- `sudo su `
- ` . ./aliases.sh `       to use aliases (look in aliases.sh )
- `dcomposer install `       to recreate dependencies
- `dpermit`
- `dup`        to run entire package
- `dartisan migrate`   to create the tables to his own database
- `dartisan migrate --seed`   to seed the  database



Whenever you add files to root directory make sure to add permitions  with command `dpermit` in dockervel directory.

**Go to localhost in your browser to check the app.**

**To run Behat features type:**


`docker-compose run  php php /var/www/html/vendor/bin/behat `




**To install node modules in your project run**

` dnodejs npm install`

install gulp with:

`dnodejs npm install gulp`


run gulp once:

`dgulp`


add gulp watch:

`dgulp-watch`


**To be able to run protractor**


`cd dockervel` 

`dpermit`

`cd www/e2e_test`


`sudo su`


`docker pull webnicer/protractor-headless`

`cd dockervel` 

`dpermit`

`cd www/e2e_test`

`docker run -it --privileged --rm --net=host -v /dev/shm:/dev/shm -v $(pwd):/protractor webnicer/protractor-headless conf.js`
