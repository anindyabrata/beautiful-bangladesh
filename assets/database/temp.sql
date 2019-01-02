DROP TABLE IF EXISTS hillTrack;

CREATE TABLE hillTrack
(
id int primary key unique not null,
title varchar(255),
image varchar(255),
description varchar(255),
howtogo varchar(255)
);

insert into hillTrack(id,title,image,description,howtogo)
values(1,'Shoilo Propat Waterfalls','shoilopropat.jpg','Shoilo Propat or Shoylo Propat is at Milanchari and 4km from the town on the road to Thanchi. This waterfall is a tourist site maintained by Bangladesh Parjatan Corporation. During the rainy season, the water flow becomes really furious. While visiting this water you may want to roam around the small market near this waterfall for handicrafts, handloom products and exotic foods sold by the tribal people.',
'After reaching at Bandarban, take local transport to reach that waterfall in Thanchi Upazila.
So you can hire a private jeep or auto rickshaw to go there.');
insert into hillTrack(id,title,image,description,howtogo)
values(2,'Nafakhum','nafakhum.jpg','Nafakhum is one of the most beautiful waterfalls in Bangladesh.
Nafakhum is situated on the wild hilly Sangu River at a remote area called Remakri of Thanchi upazilla under Bandarban Hill District in Bangladesh.
Nafakhum is also known as Remakri waterfall.
Every traveler should have a tour plan to visit this beautiful tourism spot of Bandarban at least once and then they will feel to visit that travel spot again and again.',
'Travelers should reach to Bandarban if they are interested to have a tour to this Nafakhum waterfall. 
There are many bus services among the districts of Bangladesh to reach Bandarban.');

insert into hillTrack(id,title,image,description,howtogo)
values(3,'Rijuk Waterfalls','rijuk.jpg',
'Located at Ruma upazilla, Rijuk Waterfall (Rijuk Jhorna) is about 300 feet high with continuous flow of water which falls into the river Sangu. This waterfall is surrounded by diverse natural resources. It is 66km southeast from Bandarban town. Rijuk waterfall is located at Ruma upazilla of Bandarban in Bangladesh. It is 66 kilometer southeast from Bandarban town. As there is no food and accommodation facility in Rijuk falls you have to carry your food and waters from Ruma Bazaar.'
,'First need to reach at Bandarban from Dhaka by bus. Then need to reach at ‘Koikhong jhiri’, Ruma Ghat by local bus or ‘Chander Gari’. Cross river Sangu by engine boat, will take 30 minutes to reach at Ramu Bazar. At ‘Ruma Bazar’ need to hire a guide and must register tourist name, guide name and additional informations to the military check post. From ‘Ramu Bazar’ need to hire engine boat to reach ‘Rijuk Waterfall’ for two way (Up-down).');

insert into hillTrack(id,title,image,description,howtogo)
values(4,'Jadipai Waterfall','jadipai.jpg','Jadipai Waterfall or Jadipai Jhorna is one of the widest water falls in Bangladesh. Jadipai Waterfall is located at Ruma upazilla of Bandarban district in Bangladesh. From Keokradong Summit to Jadipai waterfall a traveler will take about one hour walk.',
'Start journey from Dhaka.Dhaka to Bandarban you can travel by Bus,it can be around 7-8 hours journey.From Bandarban you have to hire a Chander Gari (Jeep) to reach Ruma. From Ruma bazar you have to hire a Chander Gari ( Jeep) to reach Boga Lake.
At Boga lake you have to stay a night because it will be evening when you will reach there.There are many Tribal villages in the area of Boga lake. You can stay the night and take dinner from here and guide will help you to find a good place. At morning you have to start journey to Keokradong as soon as possible. After reaching Keokradong you have a long way to go Jadipai.It will take 2.5 hours to reach Jadipai by feet.');


insert into hillTrack(id,title,image,description,howtogo)
values(5,'Chingri Jhiri Waterfall','chingri.jpg','Chingri Jhiri waterfall is situated at Ruma upazilla and close to Boga lake. It takes mostly one-hour-walk from Boga lake through some big rock and pebble stones.','ou have to make a trip from Bandarban to Ruma by “Chander Gari” (public jeep) or a private vehicle. From Ruma you can hire public jeep upto Boga Lake. You can also walk to Boga Lake in winter season. It will require 6 hours to reach Boga Lake.');



