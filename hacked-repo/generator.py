#!/usr/bin/env python3
import os
import json
import datetime
import fileinput
import config

print("This script will generate/create you a depiction file for Sileo but some information like changelog/version history except the first release version number will not be include so you will have to edit the depiction file after to add that information. This script will be-able to do that sometime in the future just not yet.")
print("You may leave some fields blank if needed.")
print("Pick Template:")
print("1. Default")
template = input("Template Name/Number: ")

if (template == "1"):
    TemplateFileName = "default.json" # The name of the template that is being used.

    # Ask the user some information to add to the depiction file.
    headerimage = input("Header Image URL: ")

    while True:
        try:
            packagename = input("Package Name: ")
            if packagename == '':
                print("Please enter a name for your package.")
                continue
            else:
                break
        except ValueError:
            break

    while True:
        try:
            description = input("Package Description: ")
            if description == '':
                print("Please enter a description for your package.")
                continue
            else:
                break
        except ValueError:
            break

    screenshoturl = input("Screenshot URL: ")
    knownissues = input("Known Issues: ")

    while True:
        try:
            firstversion = input("First Release Version Number (Example: 1.0): ")
            if firstversion == '':
                print("Please enter the first released version number for your package.")
                continue
            elif firstversion.isalpha():
                print("Please enter a number not a string.")
                continue
            else:
                break
        except ValueError:
            break

    while True:
        try:
            firstreleasedate = input("First Version Release Date (YYYY/MM/DD): ")
            if firstreleasedate == '':
                print("Please enter the date your package was first released.")
                continue
            else:
                pass
            datetime.datetime.strptime(firstreleasedate, '%Y/%m/%d')
            break
        except ValueError:
            print("Incorrect date format, should be YYYY/MM/DD")
            continue

    while True:
        try:
            latestversion = input("Latest Version: ")
            if latestversion == '':
                print("Please enter the latest released version number for your package.")
                continue
            elif latestversion.isalpha():
                print("Please enter a number not a string.")
                continue
            else:
                break
        except ValueError:
            break

    while True:
        try:
            latestreleasedate = input("Latest Version Release Date (YYYY/MM/DD): ")
            if latestreleasedate == '':
                print("Please enter the date your latest version of your package was released.")
                continue
            else:
                pass
            datetime.datetime.strptime(latestreleasedate, '%Y/%m/%d')
            break
        except ValueError:
            print("Incorrect date format, should be YYYY/MM/DD")
            continue

    while True:
        try:
            price = input("Price: ")
            if price == '':
                print("Please enter a price.")
                continue
            else:
                break
        except ValueError:
            break

    while True:
        try:
            developer = input("Developer Name: ")
            if developer == '':
                print("Please enter a name.")
                continue
            else:
                break
        except ValueError:
            break

    supporturl = input("Support URL: ")

    # Get the placeholder text in the template file and tell it what to replace it with which is the information the user enters.
    replacements = {'Header Image URL':headerimage, 'Package Name':packagename, 'Package Description':description, 'Package Screenshot URL':screenshoturl, 'Package Screenshot URL?size="640"':screenshoturl+"?size='640'", 'First Released Version Number':firstversion, 'First Release Date':firstreleasedate, 'Latest Version Number':latestversion, 'Latest Release Date':latestreleasedate, 'Package Price':price, 'Package Developer':developer, 'Support URL':supporturl, 'Package Known Issues':knownissues}
    # Remove placeholder text if input field is left blank.
    removeplaceholdertext = {'Header Image URL':'', 'Package Screenshot URL':'', 'Package Screenshot URL?size=640':'', 'Support URL':'', 'Package Known Issues':'None'}

    try:
        # If the folder to save the depiction file doesn't exists create it.
        if not os.path.exists(config.SaveDepictionPath):
            os.makedirs(config.SaveDepictionPath)
        # Create the depiction file and add the information that the user enters to that file.
        try:
            with open(config.TemplatesPath+TemplateFileName) as infile, open(config.SaveDepictionPath+packagename, 'w') as outfile:
                print("Creating "+ packagename +" in "+ config.SaveDepictionPath +"...")
                print("Created "+ packagename +" in "+ config.SaveDepictionPath +".")
                for createdepictionfile in infile:
                    for src, target in replacements.items():
                        createdepictionfile = createdepictionfile.replace(src, target)
                    outfile.write(createdepictionfile)
        except ValueError:
            print("Failed to create "+ packagename +" in "+ config.SaveDepictionPath+".")

            # Remove placeholder text if any field was left blank,
            for removeplaceholders in outfile:
                for placeholder, removeplaceholder in removeplaceholdertext.items():
                    removeplaceholders = removeplaceholders.replace(placeholder, removeplaceholder)
                outfile.write(removeplaceholders)
    except ValueError:
        print("Something went wrong.")

    # Add whats going to be replaced in the template file to a variable to display later to let the user know what is happening.
    replacementslist = ['header image','package name','package description','package screenshot url','first released version number','first release date','latest version number','latest release date','price','package developer','package known issues']
    replacementslistlen = len(replacementslist)

    try:
        # Tell the user what is being written to the file.
        for i in range(0, replacementslistlen):
            print("Writing "+ replacementslist[i] +" to file...")
        print("Done writing to file.")
        print("You can find your native depiction file for Sileo in "+ config.SaveDepictionPath +".")
    except ValueError:
        print("Failed to write "+ replacementslist[i] +" to file...")

# Show the user a error if they enter a number for a template that can't be found.
else:
    print("The template you are looking for can not be found!")
