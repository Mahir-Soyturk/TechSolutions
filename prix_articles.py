montant = float(input("Montant de la commande en euros : "))

if montant < 30:
    print("Frais de livraison : 5 euros")
else:
    print("Livraison gratuite")
