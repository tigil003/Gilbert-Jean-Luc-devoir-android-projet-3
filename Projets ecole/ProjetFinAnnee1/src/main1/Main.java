package main1;

import java.util.Date;
import java.util.List;
import java.util.Scanner;

import main.Voyage;
import main.VoyageManager;

public class Main {
    public static void main(String[] args) {
        VoyageManager manager = new VoyageManager();
        Scanner scanner = new Scanner(System.in);
        
        while (true) {
            System.out.println("1. Ajouter Voyage");
            System.out.println("2. Supprimer Voyage");
            System.out.println("3. Modifier Voyage");
            System.out.println("4. Rechercher Voyages");
            System.out.println("5. Generer Itinerary");
            System.out.println("6. Quitter");
            System.out.print("Choisir une option: ");
            int choice = scanner.nextInt();
            scanner.nextLine(); 

            switch (choice) {
                case 1:
                    System.out.print("Destination: ");
                    String dest = scanner.nextLine();
                    System.out.print("Date Depart (yyyy-mm-dd): ");
                    Date depart = java.sql.Date.valueOf(scanner.nextLine());
                    System.out.print("Date Retour (yyyy-mm-dd): ");
                    Date retour = java.sql.Date.valueOf(scanner.nextLine());
                    System.out.print("Budget: ");
                    double budget = scanner.nextDouble();
                    scanner.nextLine();  
                    manager.addVoyage(new Voyage(dest, depart, retour, budget));
                    break;
                case 2:
                    System.out.print("Index of voyage to remove: ");
                    int indexToRemove = scanner.nextInt();
                    scanner.nextLine();  
                    if (indexToRemove >= 0 && indexToRemove < manager.getVoyages().size()) {
                        manager.removeVoyage(manager.getVoyages().get(indexToRemove));
                    } else {
                        System.out.println("Invalid index");
                    }
                    break;
                case 3:
                    System.out.print("Index of voyage to update: ");
                    int indexToUpdate = scanner.nextInt();
                    scanner.nextLine();  
                    if (indexToUpdate >= 0 && indexToUpdate < manager.getVoyages().size()) {
                        System.out.print("New Destination: ");
                        dest = scanner.nextLine();
                        System.out.print("New Date Depart (yyyy-mm-dd): ");
                        depart = java.sql.Date.valueOf(scanner.nextLine());
                        System.out.print("New Date Retour (yyyy-mm-dd): ");
                        retour = java.sql.Date.valueOf(scanner.nextLine());
                        System.out.print("New Budget: ");
                        budget = scanner.nextDouble();
                        scanner.nextLine(); 
                        manager.updateVoyage(indexToUpdate, new Voyage(dest, depart, retour, budget));
                    } else {
                        System.out.println("Invalid index");
                    }
                    break;
                case 4:
                    System.out.print("Search destination: ");
                    dest = scanner.nextLine();
                    List<Voyage> foundVoyages = manager.searchVoyages(dest);
                    for (Voyage v : foundVoyages) {
                        System.out.println(v);
                    }
                    break;
                case 5:
                    manager.generateItinerary();
                    break;
                case 6:
                    System.exit(0);
                    break;
                default:
                    System.out.println("Invalid choice. Try again.");
            }
        }
    }
}
