<p align="center" style="padding: none; margin:none;">
    <img src="https://i.imgur.com/NpJCPEc.png" width="627px">
</p>

# What is Index Of 2.0?
IO20 an  extremely simple single-file PHP application designed to turn any device into a high speed LAN/internet file server in just a few clicks. All you need is a webserver application with PHP support such as [XAMPP](https://www.apachefriends.org/index.html). Once it's running, just drag IO20's index.php into the public folder and visitors should automatically see it when they visit your IP in their web browser.

# About
* So much better than seeing an ugly browser-generated "index-of", especially considering some browsers do a much worse job than others. There's no consistency in appearance or functionality across browsers and platforms. IO20 solves this by making every browser and platform see exactly the same page.
* Single file - IO20 comes in the form of a single PHP file named "index.php". You drag this file into your webserver, connect, and IO20 handles the rest.
* Uploading - If you'd prefer using the webpage (or would like others to upload to your folder) you can set an uploader password in the file.
* Download or view - Every file has a "view" and "explicit download" button after it. Sometimes a browser doesn't know if you want to view/stream a file as opposed to directly download it. IO20 lets the user specify thanks to HTML5 forced download attribute.
* Easy - As the webmaster, all you have to do is drop IO20 into the folder. Visitors will automatically see a generated file list of the relative directory.

# How to install
You need to install a webserver application on your machine. I recommend XAMPP as it's easy. I presume you're using Windows, and XAMPP is great on Windows. Install PHP and Apache. After it's installed, just hit "start" on your Apache server in the XAMPP control panel. Navigate to xampp directory/htocs (this is the public webserver folder) and delete everything. Then, paste io20 (it's named "index.php" for the sake of webserver friendliness) in the empty directory. Type your public IP address into the address bar of any web browser from any device on the network (make sure you let Apache through Windows Firewall) and you should see your server. If you don't know your IP, open CMD and type "ipconfig". It's the one that starts with 192.168 and doesn't end in 1.

# Tips
* MAKE SURE you enable uploading in php.ini - uploading will NOT work without this.
* Keep the host machine connected to ethernet rather than WiFi. Over WiFi, the bandwidth could max out with as few as 3-4 machines accessing IO20. Gigabit is recommended.
* Don't expect full speed when hosting on a Raspberry Pi. Not only is the SD card usually a bottleneck, but the ethernet adapter isn't as fast as one in a full-sized computer.
* Open IO20 with a notepad and ensure your settings are how you want them. They're at the top.

# Todo
* Overwrite protection on upload
* GET var sanitation
* Cleanup and optimization
* Visual improvements
* More file extension image support

# License

Although the project is MIT licensed, the icons contained in the file are a special set of Fugue icons. If you wish to remove the Fugue icons link from the bottom of the page, you will need to also replace the icons contained in the file, as it's a Creative Commons attribution.

# Contributor Resources
* [Simplest PHP file upload using the POST method](https://gist.github.com/taterbase/2688850)
