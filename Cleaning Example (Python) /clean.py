import csv
f = open('file1.csv', 'rb')
reader = csv.reader(f)
next(reader, None) 

for row in reader:
    date = row[1]

    string_month=   date[-2:]
    int_month = int(string_month)

    string_year =   date[:+4]
    int_year = int(string_year)

   
    if int_month < 13:
	if row[0] == "PCEIEUS":
	    	print str(int_month) + "-" + str(int_year) + ": " + row[2] + " #" + row[0]

f.close()
