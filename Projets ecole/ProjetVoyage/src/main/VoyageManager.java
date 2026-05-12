package main;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.util.ArrayList;
import java.util.List;

public class VoyageManager {
    private List<Voyage> voyages;
    private final String filename = "voyages.dat";

    public VoyageManager() {
        voyages = new ArrayList<>();
        loadVoyages();
    }

    public void addVoyage(Voyage voyage) {
        voyages.add(voyage);
        saveVoyages();
    }

    public void removeVoyage(Voyage voyage) {
        voyages.remove(voyage);
        saveVoyages();
    }

    public void updateVoyage(int index, Voyage voyage) {
        voyages.set(index, voyage);
        saveVoyages();
    }

    public List<Voyage> searchVoyages(String destination) {
        List<Voyage> result = new ArrayList<>();
        for (Voyage v : voyages) {
            if (v.getDestination().equalsIgnoreCase(destination)) {
                result.add(v);
            }
        }
        return result;
    }

    public void generateItinerary() {
        System.out.println("Itinerary for upcoming voyages:");
        for (Voyage v : voyages) {
            System.out.println(v);
        }
    }

    private void saveVoyages() {
        try (ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream(filename))) {
            oos.writeObject(voyages);
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    private void loadVoyages() {
        try (ObjectInputStream ois = new ObjectInputStream(new FileInputStream(filename))) {
            voyages = (List<Voyage>) ois.readObject();
        } catch (FileNotFoundException e) {
            System.out.println("No saved voyages found. Starting fresh.");
        } catch (IOException | ClassNotFoundException e) {
            e.printStackTrace();
        }
    }

    public List<Voyage> getVoyages() {
        return voyages;
    }
}
