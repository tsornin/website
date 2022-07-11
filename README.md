# website
Personal website repo for deployment to [http://bruno-li.com/](http://bruno-li.com/).

## Deployment notes

Clone this repo. Install [the latest XAMPP](https://www.apachefriends.org/download.html). Before setarting the Apache server, go to `Config -> Apache (http.conf)` and change `DocumentRoot` and `Directory` to point to the repo.

```diff
-DocumentRoot "C:/xampp/htdocs"
-<Directory "C:/xampp/htdocs">
+DocumentRoot "C:/Git/tsornin/website"
+<Directory "C:/Git/tsornin/website">
```

Serve HTML as PHP by making the `.htaccess` file. This file is `.gitignore because it's different between XAMPP and DreamHost. Copy .`htaccess_general` to `.htaccess` and un-comment the relevant lines.
