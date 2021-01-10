drop table if exists product;

create table product (
	id int unsigned not null unique auto_increment,
	name varchar(50) not null,
	price int unsigned,
	category varchar(20) not null,
	image varchar(50),
	detail text
) engine=InnoDB default charset=utf8;

insert into product (name, price, category, image, detail) values ('和財布(女性用)', 4100, '財布・小物入れ','1.png', '日本らしい奥ゆかしさを持つ財布です。見た目はもちろんのこと、機能面でも充実しており、8つのカードポケットがついています。');
insert into product (name, price, category, image, detail) values ('市松文様 小物入れ', 2500, '財布・小物入れ','2.png', '市松文様をスタイリッシュに使用した小物入れです。');
insert into product (name, price, category, image, detail) values ('籠', 1900, '財布・小物入れ','3.png', '使い方次第で、様々な用途に利用できます。');
insert into product (name, price, category, image, detail) values ('ランチョンマット', 900, '食卓用','4.png', 'お椀やお箸によく似合う、和風のランチョンマットです。');
insert into product (name, price, category, image, detail) values ('お椀', 900, '食卓用','5.png', 'レンジにも対応している、和風モダンなお椀です。');
insert into product (name, price, category, image, detail) values ('夫婦箸', 1800, '食卓用','6.png', '名入れも可能です。夫婦やカップルでどうぞ。');
insert into product (name, price, category, image, detail) values ('扇子', 820, 'その他','7.png', 'エコな時代に最適。ファッショナブルな扇子です。');
insert into product (name, price, category, image, detail) values ('手染め 手ぬぐい', 520, 'その他','8.png', '手染めの手ぬぐいです。');

/*
insert into product( id, name, price, category, image, detail ) values( 1, '和財布(女性用)', 4100, 1, '1.png', '日本らしい奥ゆかしさを持つ財布です。見た目はもちろんのこと、機能面でも充実しており、8つのカードポケットがついています。' );
insert into product( id, name, price, category, image, detail ) values( 2, '市松文様 小物入れ', 2500, 1, '2.png', '市松文様をスタイリッシュに使用した小物入れです。' );
insert into product( id, name, price, category, image, detail ) values( 3, '籠', 1900, 1, '3.png', '使い方次第で、様々な用途に利用できます。' );
insert into product( id, name, price, category, image, detail ) values( 4, 'ランチョンマット', 900, 2, '4.png', 'お椀やお箸によく似合う、和風のランチョンマットです。' );
insert into product( id, name, price, category, image, detail ) values( 5, 'お椀', 900, 2, '5.png', 'レンジにも対応している、和風モダンなお椀です。' );
insert into product( id, name, price, category, image, detail ) values( 6, '夫婦箸', 1800, 2, '6.png', '名入れも可能です。夫婦やカップルでどうぞ。' );
insert into product( id, name, price, category, image, detail ) values( 7, '扇子', 820, 3, '7.png', 'エコな時代に最適。ファッショナブルな扇子です。' );
insert into product( id, name, price, category, image, detail ) values( 8, '手染め 手ぬぐい', 520, 3, '8.png', '手染めの手ぬぐいです。' );
*/
