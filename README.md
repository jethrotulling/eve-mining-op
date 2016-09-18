# Jethro's Mining Op



### Create database
php bin/console doctrine:database:create


### Add tables and indexes
php bin/console doctrine:schema:update --force


### Other helpful commands
php bin/console doctrine:database:drop --force


### Create getters/setters
php bin/console doctrine:generate:entities MiningBundle


### Run Symfony for dev
php bin/console server:run



### EVE API's
http://eveonline-third-party-documentation.readthedocs.io/en/latest/xmlapi/api/api_calllist.html


### DB Dump location's
https://developers.eveonline.com/resource/resources
https://www.fuzzwork.co.uk/dump/



### In-game fleet logs
From what I saw when I was testing, the in game fleet logs are somewhat useless.
Its not an actual log, its more of an updated log. If someone DC's logs are lost.

Or maybe fleet logs:
In game Export Loot History

Mac logs are in:
cd /Users/jethro/Library/Application\ Support/EVE\ Online/p_drive/User/My\ Documents/EVE/logs/Fleetlogs/


## Log Formatting
Log formatting is a tab delimited csv.
```
Time	Character	Item Type	Quantity	Item Group
2016.09.02 21:10	GodHimself	Compressed Spodumain	166	Spodumain	
2016.09.02 21:10	Garry Marter	Gneiss	934	Gneiss	
2016.09.02 21:10	Casper Jorgensen	Arkonor	384	Arkonor	
2016.09.02 21:00	Garry Marter	Corpse	1	Biomass	
2016.09.02 21:08	GodHimself	Spodumain	3025	Spodumain	
2016.09.02 21:09	John Marter	Gneiss	3137	Gneiss	
2016.09.02 21:10	Jimbo 'James' MacQuarrels	Bistot	2174	Bistot	
2016.09.02 21:00	Kurozi Wolfgang	Pure Jaspet	4133	Jaspet	
2016.09.02 21:40	Hiras Celestine	Bistot	8954	Bistot	
2016.09.02 21:40	Aida Celestine	Bistot	8605	Bistot	
2016.09.02 21:37	Rynr Celestine	Bistot	24491	Bistot	
```

# Future:
https://gist.github.com/tjamps/11d617a4b318d65ca583


http://symfony.com/doc/current/bundles/FOSRestBundle/format_listener.html

http://symfony.com/doc/current/serializer.html

http://welcometothebundle.com/symfony2-rest-api-the-best-2013-way/


## Packaged ship volumes
https://forums.eveonline.com/default.aspx?g=posts&t=286974
https://www.reddit.com/r/Eve/comments/4a4n6p/ccplease_put_back_packaged_volume_in_ship/

