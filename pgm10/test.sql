CREATE  TABLE  IF  NOT  EXISTS  `student`  (
`usn`  varchar(20)  NOT  NULL,
`name`  varchar(20)  NOT  NULL,
 
`address`  varchar(21)  NOT  NULL,
`email` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT  INTO  `student`  (`usn`,  `name`,  `address`,  `email`)  VALUES ('1GA19CS194',  'Sathya',  'Shimoga',  'Sathya@gmail.com'), ('1GA19CS165',  'Sharan',  'Mangalore',  'sharan@gmail.com'), ('1GA19CS148',  'Sivani',  'Bangalore',  'jcsivani@gmail.com'), ('1GA19CS156',  'Sthuthi',  'Mysore',  'sthuthib@gmail.com'), ('1GA19CS187',  'Amith',  'Bangalore',  'amith@gmail.com');  COMMIT;

