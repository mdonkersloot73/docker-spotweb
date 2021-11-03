<?php
unset($settings['sabnzbd']['categories']);
# vertaal de categorieën uit spots (zie SpotCategories.php) naar sabnzbd categorieën
$settings['sabnzbd']['categories'][0]['default'] = 'movies'; # Default categorie als niets anders matched
$settings['sabnzbd']['categories'][0]['d11'] = 'tv';
$settings['sabnzbd']['categories'][0]['a5'] = 'books';
$settings['sabnzbd']['categories'][0]['d31'] = 'comics';
$settings['sabnzbd']['categories'][0]['z3'] = 'pron';
$settings['sabnzbd']['categories'][1]['default'] = 'music';
$settings['sabnzbd']['categories'][2]['default'] = 'games';
$settings['sabnzbd']['categories'][2]['a0'] = 'games';
$settings['sabnzbd']['categories'][2]['a11'] = 'wii';
$settings['sabnzbd']['categories'][3]['default'] = 'apps';
$settings['sabnzbd']['categories'][3]['b24'] = 'os';
$settings['sabnzbd']['categories'][3]['b26'] = 'learn';
$settings['sabnzbd']['categories'][3]['b30'] = 'learn';
