CREATE DATABASE SAS;
use  sas;

create table donor
(  d_ID int  primary key,
   fname text,
   lname text,
   ph_no text ,
   gender text,
   city  text,
   colony  text,
   street  text
);

create table donation
(
  d_id int ,
  donation_date date,
  CONSTRAINT PRIMARY KEY (d_id,donation_date),
  constraint foreign key (d_id ) references donor(d_ID)
);

create table adopter
(  a_ID int  primary key,
   fname text not null,
   lname text not null,
   ph_no text not null ,
   gender text not null,
   city  text not null,
   colony  text not null,
   street  text not null
    
);
create table adoption
(
  a_id int,
  adoption_date date,
  CONSTRAINT PRIMARY KEY (a_id,adoption_date),
  constraint foreign key (a_id ) references adopter(a_ID)
);

create table informer
(  i_ID   int primary key ,
   fname  text not null,
   lname  text not null,
   ph_no  text null,
   gender text not null,
   city   text not null,
   colony text not null,
   street  text not null
);

create table LOCATION
(
Informer_ID  int ,
Location_ID  int ,
City         text not null,
Street        text not null,
Colony        text not null,
primary key(Informer_ID, Location_ID),
constraint foreign key (Informer_ID ) references informer(i_ID)
);

create table shelter
(
Shelter_ID  int ,
s_name text not null,
city text not null,
street text not null,
colony  text not null,
constraint primary key(Shelter_ID)
);

create table ANIMAL
(
Animal_ID    int  primary key, 
gender       text not null,
age          text not null ,
color        text not null,
a_condition  text not null ,
intake_date  date,
Adopter_ID   int ,
Donor_ID	 int,
type text not null,
breed        text not null,
shelter_ID int,
constraint foreign key (shelter_ID ) references shelter(Shelter_ID),
constraint foreign key (Adopter_ID ) references adopter(a_ID),
constraint foreign key (Donor_ID ) references donor(d_ID)
);

create table INFORMED_BY 
(
Informer_ID  int ,
Animal_ID    int ,
primary key(Informer_ID , Animal_ID  ),
constraint foreign key (Informer_ID ) references informer(i_ID),
constraint foreign key (Animal_ID ) references ANIMAL(Animal_ID)
);

create table TREATMENT
(
Dr_ID           text not null,
Dr_name         text not null,
Animal_ID int,
Treat_date date,
primary key(Treat_date,Animal_ID),
constraint foreign key (Animal_ID ) references ANIMAL(Animal_ID)

);

create table VEHICLE
(Vehicle_ID  int,
Shelter_ID   int,
primary key(Vehicle_ID ,Shelter_ID),
constraint foreign key (Shelter_ID ) references shelter(Shelter_ID)
);

create table CAGE
(
cage_id int,
shelter_id int,
PRIMARY KEY(cage_id,shelter_id),
constraint foreign key (shelter_id ) references shelter(Shelter_ID)
);

create table employee
(ID	int Primary key,
fname text not null,
lname text not null,							
ph_No text not null ,
gender text not null,
city text not null,
colony text not null,
street text not null,
super_ID int,
salary text not null,
shelter_ID int,
constraint foreign key (super_ID ) references employee(ID),
constraint foreign key (shelter_ID ) references shelter(Shelter_ID)
);

INSERT INTO `adopter` (`a_ID`, `fname`, `lname`, `ph_no`, `gender`, `city`, `colony`, `street`) VALUES
(4561239, 'Atif', 'Qureshi', '03125764598', 'Male', 'Rawalpindi', '1', 'Bahria Town'),
(3258754, 'Amal', 'Naeem', '03335773555', 'Female', 'Rawalpindi', '34', 'Scheme3');

INSERT INTO `adoption` (`a_id`, `adoption_date`) VALUES
(3258754, '2017-01-14'),
(4561239, '2017-01-14');

INSERT INTO `donor` (`d_ID`, `fname`, `lname`, `ph_no`, `gender`, `city`, `colony`, `street`) VALUES
(3740538, 'Tayyaba', 'Ambreen', '03350999872', 'Female', 'Rawalpindi', 'Noor', '12'),
(3834538, 'Amal', 'Naeem', '03345261344', 'Female', 'Rawalpindi', 'Scheme3', '8'),
(3356387, 'Muhammad', 'Awais', '03235240497', 'Male', 'Rawalpindi', 'Noor', '12'),
(3204387, 'Maryam', 'Adnan', '03135289877', 'Female', 'Islamabad', 'G-13', '112');

INSERT INTO `donation` (`d_id`, `donation_date`) VALUES
(335638, '2017-01-14'),
(3204387, '2017-01-14'),
(3356387, '2017-01-14'),
(3740538, '2017-01-14'),
(3834538, '2017-01-14');

INSERT INTO `shelter` (`Shelter_ID`, `s_name`, `city`, `street`, `colony`) VALUES
(1, 'A(sas)', 'Rawalpindi', '3', 'Westridge'),
(2, 'B(sas)', 'Karachi', '34', 'Korangi Town'),
(3, 'C(sas)', 'Lahore', '12', 'Johar Town'),
(4, 'D(sas)', 'Multan', '45', 'National');

INSERT INTO animal (Animal_ID, gender, age, color, type, a_condition, intake_date, Adopter_ID,Donor_ID, breed, shelter_ID) VALUES
(1, 'Male', '1(year)', 'White and Brown', 'dog', 'Healthy', '2016-05-14', 3258754,3740538, 'Harrier', 1),
(2, 'Female', '1.5(year)', 'Brown', 'dog', 'Healthy', '2016-11-15', NULL,3834538, 'Goldador', 1),
(3, 'Male', '8(months)', 'White', 'Cat', 'Healthy', '2016-11-03', NULL,3356387, 'Persian', 2),
(4, 'Male', '6(months)', 'White', 'Cat', 'Healthy', '2016-12-14', NULL,NULL, 'Turkish Angora', 2);


INSERT INTO `cage` (`cage_id`, `shelter_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2);

INSERT INTO employee (ID, fname, lname, ph_No, gender, city, colony, street, super_ID, salary, shelter_ID) VALUES
(1, 'Taimoor', 'Khan', '03352349341', 'Male', 'Lahore', 'Gulbarg', '23', 5, '23,000', 3),
(2, 'Saba', 'Qureshi', '03232349341', 'Female', 'Rawalpindi', 'DHA', '1', 5, '25,000', 1),
(3, 'Moaz', 'Azam', '02437651987', 'Male', 'Lahore', 'DHA', '2', 1, '12,000', 3),
(4, 'Waqas', 'Awan', '03009867542', 'Male', 'Karachi', 'Bahria Town', '21', 5, '15,000', 3),
(5, 'Saqib', 'Fayyaz', '03435723765', 'Male', 'Rawalpindi', 'Westridge', '2', NULL, '50,000', 3);
drop table employee;

INSERT INTO `informer` (`i_ID`, `fname`, `lname`, `ph_no`, `gender`, `city`, `colony`, `street`) VALUES
(2756431, 'Muhammad', 'Irfan', '03362349876', 'Male', 'Karachi', '13', 'Layari'),
(3165231, 'Mahnoor', 'Awan', '03316749876', 'Female', 'Rawalpindi', '21', 'People\'s Colony'),
(4358231, 'Moaz', 'Ali', '03359849876', 'Male', 'Rawalpindi', '56', 'Scheme3'),
(2876931, 'Muhammad', 'Idrees', '03335773555', 'Male', 'Rawalpindi', '56', 'Westridge');


INSERT INTO `informed_by` (`Informer_ID`, `Animal_ID`) VALUES
(2756431, 2),
(2876931, 4),
(4358231, 1),
(4358231, 2);

INSERT INTO `location` (`Informer_ID`, `Location_ID`, `City`, `Street`, `Colony`) VALUES
(2756431, 1, 'Karachi', '6', 'Korangi'),
(3165231, 1, 'Islamabad', '34', 'G-8'),
(4358231, 1, 'Rawalpingi', '5', 'Saddar'),
(287631, 1, 'Rawalpingi', '2', 'People\'s Colony'),
(2876931, 1, 'Rawalpingi', '2', 'People\'s Colony');

INSERT INTO `treatment` (`Dr_ID`, `Dr_name`, `Animal_ID`, `Treat_date`) VALUES
('1', 'Yasir Ijaz', 1, '2016-11-06'),
('2', 'Usman Ahmed', 1, '2016-12-08'),
('3', 'Faizan Ali', 2, '2016-10-03'),
('2', 'Usman Ahmed', 3, '2016-12-27');

INSERT INTO `vehicle` (`Vehicle_ID`, `Shelter_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3);