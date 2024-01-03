-- Music Space


-- 
drop database if exists kgan;

create database kgan;

use kgan;

-- table adminInfo
create table adminInfo(
	email		varchar(256) primary key,
	nameAdmin	varchar(256),
	address		varchar(256),
	phone		varchar(256)
);

insert into adminInfo value("admin@gmail.com", "MusicSpace", "Đà Nẵng", "0909123456");

-- table admin
create table admin(
	email		varchar(256) primary key references adminInfo,
	password	varchar(256)
);

-- admin
insert into admin value("admin@gmail.com", "admin");

-- table listener
create table listener(
	email			varchar(256) primary key,
	nameListener	varchar(256) ,
	birthday		date ,
	address			varchar(256)
);

-- insert listener
insert into listener values
	('TrinhLe@gmail.com',  'Trinh', '2002/03/22', 'Đà Nẵng'),
	('VyNguyen@gmail.com', 'Vy',    '2002/11/08', 'Đà Nẵng');

-- table account
create table account(
	email			varchar(256) unique,
	password		varchar(256),
	constraint foreign key (email) references listener(email)
);

-- insert account
insert into account VALUES
    ('TrinhLe@gmail.com', 'admin'),
	('VyNguyen@gmail.com', 'admin');

-- table Singer
create table singer(
	email		varchar(256) primary key,
	nameSinger	varchar(256) ,
	birthday	date ,
	address		varchar(256) ,
	imageSinger	varchar(256) default 'notimage'
);

INSERT INTO `singer` (`email`, `nameSinger`, `birthday`, `address`, `imageSinger`) VALUES
('Amee@gmail.com',    'Amee',           '2000-03-23',       'Hà Nội',      'Amee.jpg'),
('My@gmail.com',      'Amee',           '2000-03-23',       'Hà Nội',      'Ame.jpg'),
('Đen@gmail.com',     'Đen Vâu',        '1989-05-13',       'Quảng Ninh',  'Đen Vâu.jpg'),
('Nhi@gmail.com',     'Đông Nhi',       '1988-10-13',       'Hà Nội',      'Đông Nhi.jpg'),
('Ngoc@gmail.com',    'Giang Hồng Ngọc','1989-10-27',       'Đồng Nai',    'Giang Hồng Ngọc.jpg'),
('Dung@gmail.com',    'Hoàng Dũng',     '1995-11-04',       'Thái Nguyên', 'Hoàng Dũng.jpg'),
('Quyen@gmail.com',   'Lệ Quyên',       '1981-04-02',       'Hà Nội',      'Lệ Quyên.jpg'),
('Tung@gmail.com',    'Sơn Tùng- MTP',  '1994-07-05',       'Thái Bình',   'Sơn Tùng.jpg'),
('Tien@gmail.com',    'Tiên Tiên',      '1991-01-23',       'Lâm Đồng',    'Tiên Tiên.jpg'),
('Tuong@gmail.com',   'Vũ Cát Tường',   '1992-10-02',       'An Giang',    'Vũ Cát Tường.jpg'),
('Vu@gmail.com',      'Vũ',             '1995-10-03',       'Hà Nội',      'Vũ.jpg'),
('Tu@gmail.com',      'Vương Anh Tú',   '1989-09-16',       'Hồ Chí Minh', 'Vương Anh Tú.jpg');

-- table Composer
create table composer(
	email 	varchar(256) primary key,
	nameComposer	varchar(256) ,
	birthday	date ,
	address		varchar(256) ,
	imageComposer	varchar(256) default 'image.png'
);

INSERT INTO `composer` (`email`, `nameComposer`, `birthday`, `address`, `imageComposer`) VALUES
('Đen@gmail.com',     'Đen Vâu',        '1989-05-13',     'Quảng Ninh',     'Đen Vâu.jpg'),
('Hieu@gmail.com',    'Đỗ Hiếu',        '1989-09-03',     'Hồ Chí Minh',    'Đỗ Hiếu.jpg'),
('Dung@gmail.com',    'Hoàng Dũng',     '1995-11-04',     'Thái Nguyên',    'Hoàng Dũng.jpg'),
('Tuyen@gmail.com',   'Hứa Kim Tuyền',  '1995-01-08',     'Hồ Chí Minh',    'Hứa Kim Tuyền.jpg'),
('Ly@gmail.com',      'Ly Ly',          '1996-01-01',     'Đà Nẵng',        'Ly Ly.jpg'),
('Tung@gmail.com',    'Sơn Tùng-MTP',   '1994-07-05',     'Thái Bình',      'Sơn Tùng.jpg'),
('Tien@gmail.com',    'Tiên Tiên',      '1991-01-23',     'Lâm Đồng',       'Tiên Tiên.jpg'),
('TienTran@gmail.com','Trần Tiến',      '1947-05-16',     'Hà Nội',         'Trần Tiến.jpg'),
('Son@gmail.com',     'Trịnh Công Sơn', '1939-02-28',     'Huế',            'Trịnh Công Sơn.jpg'),
('Tuong@gmail.com',   'Vũ Cát Tường',   '1992-10-02',     'An Giang',       'Vũ Cát Tường.jpg'),
('Vu@gmail.com',      'Vũ',             '1995-10-03',     'Hà Nội',         'Vũ.jpg'),
('Tu@gmail.com',      'Vương Anh Tú',   '1989-09-16',     'Hồ Chí Minh',    'Vương Anh Tú.jpg');


-- table Song
create table song(
	idSong			varchar(256) primary key,
	nameSong		varchar(256) ,
	emailSinger		varchar(256) ,
	emailComposer	varchar(256) ,
	srcSong			varchar(256),
	releaseTime		date ,
	numLike			int default 0,
	numComment		int default 0,
	numDownload		int default 0,
	constraint foreign key (emailSinger) references singer(email),
	constraint foreign key (emailComposer) references composer(email)
);

INSERT INTO `song` (`idSong`, `nameSong`, `emailSinger`, `emailComposer`, `srcSong`, `releaseTime`, `numLike`, `numComment`, `numDownload`) VALUES
('BH001', 'Anh sẽ ổn thôi',        'Tu@gmail.com',     'Tu@gmail.com',       'Anh sẽ ổn thôi', NULL, 0, 0, 0),
('BH002', 'Chị tôi',               'Ngoc@gmail.com',   'TienTran@gmail.com', 'Chị tôi', NULL, 0, 0, 0),
('BH003', 'Chúng ta của hiện tại', 'Tung@gmail.com',   'Tung@gmail.com',     'Chúng ta của hiện tại', NULL, 0, 0, 0),
('BH004', 'Còn tuổi nào cho em',   'Quyen@gmail.com',  'Son@gmail.com',      'Còn tuổi nào cho em', NULL, 0, 0, 0),
('BH005', 'Hai mươi hai',          'My@gmail.com',     'Tuyen@gmail.com',    'Hai mươi hai', NULL, 0, 0, 0),
('BH006', 'Lạ lùng',               'Vu@gmail.com',     'Vu@gmail.com',       'Lạ lùng', NULL, 0, 0, 0),
('BH007', 'Một triệu like',        'Đen@gmail.com',    'Đen@gmail.com',      'Một triệu like', NULL, 0, 0, 0),
('BH008', 'Nàng thơ',              'Dung@gmail.com',   'Dung@gmail.com',     'Nàng thơ', NULL, 0, 0, 0),
('BH009', 'Say you do',            'Tien@gmail.com',   'Tien@gmail.com',     'Say you do', NULL, 0, 0, 0),
('BH010', 'Tình bạn diệu kỳ',      'Amee@gmail.com',   'Tuyen@gmail.com',    'Tình bạn diệu kỳ', NULL, 0, 0, 0),
('BH011', 'Vì ai vì anh',          'Nhi@gmail.com',    'Hieu@gmail.com',     'Vì anh vì anh', NULL, 0, 0, 0),
('BH012', 'Yêu xa',                'Tuong@gmail.com',  'Tuong@gmail.com',    'Yêu xa', NULL, 0, 0, 0);

-- table like_interactive
create table like_interactive(
	idLikeInteractive	varchar(256) primary key,
	idSong				varchar(256),
	emailListener		varchar(256),
	likeTime			datetime,
	constraint foreign key (idSong) references song(idSong),
	constraint foreign key (emailListener) references listener(email)
);

-- table comment_interactive
create table comment_interactive(
	idCommentInteractive	varchar(256) primary key,
	idSong					varchar(256),
	emailListener			varchar(256),
	content 				varchar(256),
	commentTime				datetime,
	constraint foreign key (idSong) references song(idSong),
	constraint foreign key (emailListener) references listener(email)
);

-- table download_interactive
create table download_interactive(
	idDownload				varchar(256) primary key,
	idSong					varchar(256),
	emailListener			varchar(256),
	downloadTime			datetime,
	constraint foreign key (idSong) references song(idSong),
	constraint foreign key (emailListener) references listener(email)
);

