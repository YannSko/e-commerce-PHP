import sqlite3
from faker import Faker
import random

faker = Faker()

# Boolean for Gender




# print(data)

con = sqlite3.connect("E-commerce.db")

# Donnée à envoyé table User

for i in range(10):
    Genre = random.randint(0, 1)
    if Genre == 0:
        sexe = "H"
    else:
        sexe = "F"

    first_name = faker.first_name()
    last_name = faker.last_name()
    password = faker.password()
    password = str(hash(password))
    Email = faker.email()
    Gender = sexe
    Age = random.randint(18,99)

    
    Query = "insert into user(FirstName,LastName,Password,Email,Gender,Age) values ('"+first_name+"','"+last_name+"','"+password+"','"+Email+"','"+Gender+"',"+str(Age)+")"
    con.execute(Query)

# Donnée envoyé table Address

for i in range(10):
    street_name = faker.street_name()
    street_number = random.randint(1,100)
    city = faker.city()
    country = faker.country()
    floor = random.randint(0,10)
    Query = "insert into Address(Street,NumberStreet,City,Country,Floor) values ('"+street_name+"',"+str(street_number)+",'"+city+"','"+country+"',"+str(floor)+")"
    con.execute(Query)

# Donnée envoyé table Cart

for i in range(10):
    Quantity = random.randint(0,10)
    id_user = random.randint(1,10)
    id_article = random.randint(1,10)
    Total = random.randint(1,50)
    Query = "insert into Cart(Quantity,id_user,id_article,Total) values ("+str(Quantity)+","+str(id_user)+","+str(id_article)+","+str(Total)+")"
    con.execute(Query)

# Donnée envoyé table Commands

for i in range(10):
    Date = faker.date()
    Montant = random.randint(1,10)
    Address = faker.street_name()
    Total = random.randint(1,50)
    Delivery = faker.date()
    Query = "insert into Command(Date,Montant,Address,Total,Delivery) values ("+str(Date)+","+str(Montant)+",'"+Address+"',"+str(Total)+","+str(Delivery)+")"
    con.execute(Query)

# Donnée envoyé table Invoices

for i in range(10):
    CustomerId = random.randint(1,10)
    InvoiceDate = random.randint(1,10)
    BillingAddress = faker.street_name()
    BillingState = faker.state()
    BillingCountry = faker.country()
    BillingPostalCode = faker.postalcode()
    Total = random.randint(1,30)

    Query = "insert into invoices(CustomerId,InvoiceDate,BillingAddress,BillingState,BillingCountry,BillingPostalCode,Total) values ("+str(CustomerId)+","+str(InvoiceDate)+",'"+BillingAddress+"','" +BillingState+"','"+BillingCountry+"','"+BillingPostalCode+"',"+str(Total)+")"
    con.execute(Query)

#

# Donnée envoyé table Product
for i in range(10):
    Name = faker.word()

    Price = random.randint(1,10)
    Description = faker.name()
    Image = faker.words()
    Query = "insert into Product(Name,Price) values ('"+Name+"',"+str(Price)+")"
    con.execute(Query)
    



con.commit()
con.close
