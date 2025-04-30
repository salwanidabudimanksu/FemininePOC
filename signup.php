# Save user info in a text file
def save_user(username, email, password, role):
    with open("users.txt", "a") as file:
        file.write(f"{username},{email},{password},{role}\n")
    print(f"\n✅ {role.capitalize()} '{username}' registered successfully!\n")

def main():
    print("=== Sign Up ===")

    username = input("Enter username: ")
    email = input("Enter email: ")
    password = input("Enter password: ")

    print("Choose role:")
    print("1. Patient")
    print("2. Doctor")
    role_choice = input("Enter 1 or 2: ")

    if role_choice == "1":
        role = "patient"
    elif role_choice == "2":
        role = "doctor"
    else:
        print("Invalid role. Exiting.")
        return

    save_user(username, email, password, role)

if __name__ == "__main__":
    main()
