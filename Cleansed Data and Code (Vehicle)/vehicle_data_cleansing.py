# This is the Python source file which includes the code used to clean the
# vehicles data

import csv
import sys

# with open('data/emission_by_energy_type.csv', 'r') as file:
# Open the file
file = open('data/uncleaned/vehicles.csv', 'r')
with open('data/cleaned/vehicles_cleaned.csv', 'w', newline='') as output:
    writer = csv.writer(output)
    with open('data/uncleaned/vehicles.csv', 'r') as csvfile:
        reader = csv.DictReader(file)
        # Only these columns of data are needed
        col_names = ["id", "model", "make", "barrels08", "city08",
                     "cityCD", "cityE", "feScore", "fuelCost08", "fuelType",
                     "fuelType1", "fuelType2"]
        rows = [] # The rows we want to write to the new file
        rows.append(col_names)
        data = list(reader) # Data excluding the top row
        # Read the original data row by row, extract the data in columns we want
        # and write those data to a new csv file
        for row in data:
            columns = []
            for col_name in col_names:
                if type(col_name) == dict:
                    item = dict(col_name)
                else:
                    val = row[col_name]
                    if "08" in col_name:                # Value is a fraction
                        try:
                            val = float(row[col_name])
                            normalised_val = round(val, 2) # Round the value off
                                                           # to two digits after
                                                           # the decimal point
                            columns.append(normalised_val)
                        except ValueError:
                            print("The value can not be converted to floats")
                    # If the value equals to -1 or is empty, then set its value to
                    # "Unknown"
                    else:
                        if val == '-1' or val == "":
                            columns.append("Unknown")
                        else:
                            columns.append(val)
            rows.append(columns) # Add the tuple to the new data file
        print(rows)
        for row in rows: # Write the output to a new csv file
            writer.writerow(row)
# Close the opened file
file.close()
