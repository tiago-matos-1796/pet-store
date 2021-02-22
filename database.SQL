--
-- Table structure for table `petlovers`
--

CREATE TABLE IF NOT EXISTS `petlovers` (
 `id` int(11) NOT NULL auto_increment,
 `name` varchar(255) default NULL,
 `email` varchar(255) default NULL,
 `created_at` datetime NOT NULL,
 `updated_at` datetime NOT NULL,
 `password_digest` varchar(255) default NULL,
 `remember_digest` varchar(255) default NULL,
 `admin` tinyint(1) default NULL,
 `activation_digest` varchar(255) default NULL,
 `activated` tinyint(1) default NULL,
 `activated_at` datetime default NULL,
 `reset_digest` varchar(255) default NULL,
 `reset_sent_at` datetime default NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `index_users_on_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `petcategories`
--

CREATE TABLE IF NOT EXISTS `petcategories` (
 `id` int(11) NOT NULL auto_increment,
 `name` varchar(255) default NULL,
 `description` varchar(255) default NULL,
 `image` varchar(255) default NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petcategories`
--

INSERT INTO `petcategories` VALUES (1,'Dogs',NULL,NULL),(2,'Cats',NULL,NULL);

--
-- Table structure for table `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
 `id` int(11) NOT NULL auto_increment,
 `cat_id` int(11) NOT NULL,
 `name` varchar(255) default NULL,
 `description` varchar(255) default NULL,
 `status` int(5) default NULL,
 `image` varchar(255) default NULL,
 PRIMARY KEY (`id`),
 CONSTRAINT FOREIGN KEY (`cat_id`) REFERENCES `petcategories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` VALUES (1,1,'Max','So full of life!',0,'dg1.jpg'),(2,1,'Buddy','I love company!',0,'dg2.jpg'),(3,1,'Charlie','I like biscuits!',0,'dg3.jpg'),(4,1,'Rocky','I love my boss!',0,'dg4.jpg'),(5,1,'Cooper','I am bad!',0,'dg5.jpg'),(6,1,'Bear','I love going to the beach!',0,'dg6.jpg'),(7,1,'Doggy','So sweet!',0,'dg7.jpg'),(8,1,'Duke','I am you best friend!',0,'dg8.jpg'),(9,2,'Kitty','So shy!',0,'ct1.jpg'),(10,2,'Lucky','I love to hunt mice!',0,'ct2.jpg'),(11,2,'Princess','I am very sweet!',0,'ct3.jpg'),(12,2,'Misty','I love to play!',0,'ct4.jpg'),(13,2,'Smokey','Miau!',0,'ct5.jpg'),(14,2,'Sassy','I am very curious!',0,'ct6.jpg'),(15,2,'Simba','I am bad!',0,'ct7.jpg'),(16,2,'Tareco','I love sunny days!',0,'ct8.jpg');


--
-- Table structure for table `adoptions`
--

CREATE TABLE IF NOT EXISTS `adoptions` (
 `id` int(11) NOT NULL auto_increment,
 `petlover_id` int(11) NOT NULL,
 `pet_id` int(11) NOT NULL,
 `created_at` datetime NOT NULL,
 PRIMARY KEY (`id`),
 CONSTRAINT FOREIGN KEY (`petlover_id`) REFERENCES `petlovers` (`id`),
 CONSTRAINT FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


