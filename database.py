#!/usr/bin/python

import mysql.connector

def connect_db():
	""" Connect to MySQL database """
	try:
		db = mysql.connector.connect(host='localhost',database='startupftwdb',user='root',password='newpwd')
		cursor = db.cursor()

	except Error as e:
		print(e)

	return db,cursor

def select():
	db,cursor = connect_db()
		people = cursor.execute("select * from users")	
	people = cursor.fetchall()
	for each in people :
		print each[0] , "..." , each[1] , "..." , each[2]
#connect_db()
select()