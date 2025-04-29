# Very Simple Login Program

# Fake list of users and their passwords
users = {
    "doctor1": "password123",
    "patient1": "mypassword"
}

# Ask if the person is a doctor or a patient
user_type = input("Type 'doctor' or 'patient': ").lower()

# Ask for username
username = input("Enter your username: ")

# Ask for password
password = input("Enter your password: ")

# Check if the username is in our users list
if username in users:
    # Now check if the password matches
    if password == users[username]:
        # If password is correct, check if they are doctor or patient
        if user_type == "doctor":
            print("Welcome Doctor! You are going to the doctor page.")
        else:
            print("Welcome Patient! You are going to the patient page.")
    else:
        # Password is wrong
        print("Sorry, wrong password.")
else:
    # Username not found
    print("Sorry, no user found with that username.")
