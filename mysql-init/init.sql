/*Table structure for table `productlines` */


USE
test_db;

DROP TABLE IF EXISTS `productlines`;

CREATE TABLE `productlines`
(
    `productLine`     varchar(50) NOT NULL,
    `textDescription` varchar(4000) DEFAULT NULL,
    `htmlDescription` mediumtext,
    `image`           mediumblob,
    PRIMARY KEY (`productLine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `productlines` */

insert into `productlines`(`productLine`, `textDescription`, `htmlDescription`, `image`)
values ('Classic Cars',
        'Attention car enthusiasts: Make your wildest car ownership dreams come true. Whether you are looking for classic muscle cars, dream sports cars or movie-inspired miniatures, you will find great choices in this category. These replicas feature superb attention to detail and craftsmanship and offer features such as working steering system, opening forward compartment, opening rear trunk with removable spare wheel, 4-wheel independent spring suspension, and so on. The models range in size from 1:10 to 1:24 scale and include numerous limited edition and several out-of-production vehicles. All models include a certificate of authenticity from their manufacturers and come fully assembled and ready for display in the home or office.',
        NULL, NULL),

       ('Motorcycles',
        'Our motorcycles are state of the art replicas of classic as well as contemporary motorcycle legends such as Harley Davidson, Ducati and Vespa. Models contain stunning details such as official logos, rotating wheels, working kickstand, front suspension, gear-shift lever, footbrake lever, and drive chain. Materials used include diecast and plastic. The models range in size from 1:10 to 1:50 scale and include numerous limited edition and several out-of-production vehicles. All models come fully assembled and ready for display in the home or office. Most include a certificate of authenticity.',
        NULL, NULL),

       ('Planes',
        'Unique, diecast airplane and helicopter replicas suitable for collections, as well as home, office or classroom decorations. Models contain stunning details such as official logos and insignias, rotating jet engines and propellers, retractable wheels, and so on. Most come fully assembled and with a certificate of authenticity from their manufacturers.',
        NULL, NULL),

       ('Ships',
        'The perfect holiday or anniversary gift for executives, clients, friends, and family. These handcrafted model ships are unique, stunning works of art that will be treasured for generations! They come fully assembled and ready for display in the home or office. We guarantee the highest quality, and best value.',
        NULL, NULL),

       ('Trains',
        'Model trains are a rewarding hobby for enthusiasts of all ages. Whether you\'re looking for collectible wooden trains,
        electric streetcars or locomotives,
        you\'ll find a number of great choices for any budget within this category. The interactive aspect of trains makes toy trains perfect for young children. The wooden train sets are ideal for children under the age of 5.',
        NULL, NULL),

       ('Trucks and Buses',
        'The Truck and Bus models are realistic replicas of buses and specialized trucks produced from the early 1920s to present. The models range in size from 1:12 to 1:50 scale and include numerous limited edition and several out-of-production vehicles. Materials used include tin, diecast and plastic. All models include a certificate of authenticity from their manufacturers and are a perfect ornament for the home and office.',
        NULL, NULL),

       ('Vintage Cars',
        'Our Vintage Car models realistically portray automobiles produced from the early 1900s through the 1940s. Materials used include Bakelite, diecast, plastic and wood. Most of the replicas are in the 1:18 and 1:24 scale sizes, which provide the optimum in detail and accuracy. Prices range from $30.00 up to $180.00 for some special limited edition replicas. All models include a certificate of authenticity from their manufacturers and come fully assembled and ready for display in the home or office.',
        NULL, NULL);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products`
(
    id                   int unsigned auto_increment
        primary key,
    `productCode`        varchar(15)                            NOT NULL,
    `productName`        varchar(70)                            NOT NULL,
    `productLine`        varchar(50)                            NOT NULL,
    `productScale`       varchar(10)                            NOT NULL,
    `productVendor`      varchar(50)                            NOT NULL,
    `productDescription` text                                   NOT NULL,
    `quantityInStock`    smallint(6) NOT NULL,
    `buyPrice`           decimal(10, 2)                         NOT NULL,
    `MSRP`               decimal(10, 2)                         NOT NULL,
    `record_insert_date` datetime default '2022-12-01 00:00:00' not null,
    `record_update_date` datetime default '2022-12-01 00:00:00' not null,
    KEY                  `productLine` (`productLine`),
    CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productLine`) REFERENCES `productlines` (`productLine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert into `products`(`productCode`, `productName`, `productLine`, `productScale`, `productVendor`,
                       `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`)
values ('S10_1678', '1969 Harley Davidson Ultimate Chopper', 'Motorcycles', '1:10', 'Min Lin Diecast',
        'This replica features working kickstand, front suspension, gear-shift lever, footbrake lever, drive chain, wheels and steering. All parts are particularly delicate due to their precise scale and require special care and attention.',
        7933, '48.81', '95.70'),

       ('S10_1949', '1952 Alpine Renault 1300', 'Classic Cars', '1:10', 'Classic Metal Creations',
        'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
        7305, '98.58', '214.30'),

       ('S10_2016', '1996 Moto Guzzi 1100i', 'Motorcycles', '1:10', 'Highway 66 Mini Classics',
        'Official Moto Guzzi logos and insignias, saddle bags located on side of motorcycle, detailed engine, working steering, working suspension, two leather seats, luggage rack, dual exhaust pipes, small saddle bag located on handle bars, two-tone paint with chrome accents, superior die-cast detail , rotating wheels , working kick stand, diecast metal with plastic parts and baked enamel finish.',
        6625, '68.99', '118.94'),

       ('S10_4698', '2003 Harley-Davidson Eagle Drag Bike', 'Motorcycles', '1:10', 'Red Start Diecast',
        'Model features, official Harley Davidson logos and insignias, detachable rear wheelie bar, heavy diecast metal with resin parts, authentic multi-color tampo-printed graphics, separate engine drive belts, free-turning front fork, rotating tires and rear racing slick, certificate of authenticity, detailed engine, display stand\r\n, precision diecast replica, baked enamel finish, 1:10 scale model, removable fender, seat and tank cover piece for displaying the superior detail of the v-twin engine',
        5582, '91.02', '193.66'),

       ('S10_4757', '1972 Alfa Romeo GTA', 'Classic Cars', '1:10', 'Motor City Art Classics',
        'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
        3252, '85.68', '136.00'),

       ('S10_4962', '1962 LanciaA Delta 16V', 'Classic Cars', '1:10', 'Second Gear Diecast',
        'Features include: Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
        6791, '103.42', '147.74'),

       ('S12_1099', '1968 Ford Mustang', 'Classic Cars', '1:12', 'Autoart Studio Design',
        'Hood, doors and trunk all open to reveal highly detailed interior features. Steering wheel actually turns the front wheels. Color dark green.',
        68, '95.34', '194.57'),

       ('S12_1108', '2001 Ferrari Enzo', 'Classic Cars', '1:12', 'Second Gear Diecast',
        'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
        3619, '95.59', '207.80'),

       ('S12_1666', '1958 Setra Bus', 'Trucks and Buses', '1:12', 'Welly Diecast Productions',
        'Model features 30 windows, skylights & glare resistant glass, working steering system, original logos', 1579,
        '77.90', '136.67'),

       ('S12_2823', '2002 Suzuki XREO', 'Motorcycles', '1:12', 'Unimax Art Galleries',
        'Official logos and insignias, saddle bags located on side of motorcycle, detailed engine, working steering, working suspension, two leather seats, luggage rack, dual exhaust pipes, small saddle bag located on handle bars, two-tone paint with chrome accents, superior die-cast detail , rotating wheels , working kick stand, diecast metal with plastic parts and baked enamel finish.',
        9997, '66.27', '150.62'),

       ('S12_3148', '1969 Corvair Monza', 'Classic Cars', '1:18', 'Welly Diecast Productions',
        '1:18 scale die-cast about 10\" long doors open, hood opens, trunk opens and wheels roll', 6906, '89.14',
        '151.08'),

       ('S12_3380', '1968 Dodge Charger', 'Classic Cars', '1:12', 'Welly Diecast Productions',
        '1:12 scale model of a 1968 Dodge Charger. Hood, doors and trunk all open to reveal highly detailed interior features. Steering wheel actually turns the front wheels. Color black',
        9123, '75.16', '117.44'),

       ('S12_3891', '1969 Ford Falcon', 'Classic Cars', '1:12', 'Second Gear Diecast',
        'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.',
        1049, '83.05', '173.02'),

       ('S12_3990', '1970 Plymouth Hemi Cuda', 'Classic Cars', '1:12', 'Studio M Art Models',
        'Very detailed 1970 Plymouth Cuda model in 1:12 scale. The Cuda is generally accepted as one of the fastest original muscle cars from the 1970s. This model is a reproduction of one of the orginal 652 cars built in 1970. Red color.',
        5663, '31.92', '79.80'),

       ('S12_4473', '1957 Chevy Pickup', 'Trucks and Buses', '1:12', 'Exoto Designs',
        '1:12 scale die-cast about 20\" long Hood opens, Rubber wheels', 6125, '55.70', '118.50'),

       ('S12_4675', '1969 Dodge Charger', 'Classic Cars', '1:12', 'Welly Diecast Productions',
        'Detailed model of the 1969 Dodge Charger. This model includes finely detailed interior and exterior features. Painted in red and white.',
        7323, '58.73', '115.16'),

       ('S18_1097', '1940 Ford Pickup Truck', 'Trucks and Buses', '1:18', 'Studio M Art Models',
        'This model features soft rubber tires, working steering, rubber mud guards, authentic Ford logos, detailed undercarriage, opening doors and hood,  removable split rear gate, full size spare mounted in bed, detailed interior with opening glove box',
        2613, '58.33', '116.67'),

       ('S18_1129', '1993 Mazda RX-7', 'Classic Cars', '1:18', 'Highway 66 Mini Classics',
        'This model features, opening hood, opening doors, detailed engine, rear spoiler, opening trunk, working steering, tinted windows, baked enamel finish. Color red.',
        3975, '83.51', '141.54'),

       ('S18_1342', '1937 Lincoln Berline', 'Vintage Cars', '1:18', 'Motor City Art Classics',
        'Features opening engine cover, doors, trunk, and fuel filler cap. Color black', 8693, '60.62', '102.74'),

       ('S18_1367', '1936 Mercedes-Benz 500K Special Roadster', 'Vintage Cars', '1:18', 'Studio M Art Models',
        'This 1:18 scale replica is constructed of heavy die-cast metal and has all the features of the original: working doors and rumble seat, independent spring suspension, detailed interior, working steering system, and a bifold hood that reveals an engine so accurate that it even includes the wiring. All this is topped off with a baked enamel finish. Color white.',
        8635, '24.26', '53.91'),

       ('S18_1589', '1965 Aston Martin DB5', 'Classic Cars', '1:18', 'Classic Metal Creations',
        'Die-cast model of the silver 1965 Aston Martin DB5 in silver. This model includes full wire wheels and doors that open with fully detailed passenger compartment. In 1:18 scale, this model measures approximately 10 inches/20 cm long.',
        9042, '65.96', '124.44');