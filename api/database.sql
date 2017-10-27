CREATE TABLE IF NOT EXISTS `users` (
		`user_id` int(11) NOT NULL AUTO_INCREMENT,
		`user_name` varchar(255) NOT NULL,
		`user_email` varchar(255) NOT NULL,
		PRIMARY KEY (`user_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `tasks` (
		`task_id` int(11) NOT NULL AUTO_INCREMENT,
		`task_user_id` int(11) NOT NULL,
		`task_title` varchar(255) NOT NULL,
		`task_creation_date` datetime,
		`task_description` varchar(255) NOT NULL,
		`task_status` varchar(255) NOT NULL,
		PRIMARY KEY (`task_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
INSERT INTO users(user_name, user_email) VALUES ('Captain America','steve.rogers@us.com');
INSERT INTO users(user_name, user_email) VALUES ('Hulk','bruce.banner@us.com');
INSERT INTO users(user_name, user_email) VALUES ('Iron Man','tony@stark.com');
INSERT INTO tasks(task_user_id,task_title,task_creation_date,task_description,task_status) VALUES (1, 'Win the war','1945-05-08 12:00:00','Get those damn nazis', 'Done');
INSERT INTO tasks(task_user_id,task_title,task_creation_date,task_description,task_status) VALUES (2, 'Meditate','2015-01-01 08:40:00','I have to keep calm','Delayed');
INSERT INTO tasks(task_user_id,task_title,task_creation_date,task_description,task_status) VALUES (2, 'Get mad', '2015-01-01 09:00:00','Who pissed me off', 'Done');
INSERT INTO tasks(task_user_id,task_title,task_creation_date,task_description,task_status) VALUES (2, 'Get really mad', '2015-01-01 10:00:00', 'You made it happen', 'Done');
INSERT INTO tasks(task_user_id,task_title,task_creation_date,task_description,task_status) VALUES (3, 'Sell weapons', '2017-10-27 16:00:00','I love money', 'Scheduled');