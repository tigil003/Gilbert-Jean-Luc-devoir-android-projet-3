package main;

import java.io.*;
import java.util.*;

public class Voyage implements Serializable {
    private static final long serialVersionUID = 1L;
    private String destination;
    private Date dateDepart;
    private Date dateRetour;
    private double budget;

    public Voyage(String destination, Date dateDepart, Date dateRetour, double budget) {
        this.destination = destination;
        this.dateDepart = dateDepart;
        this.dateRetour = dateRetour;
        this.budget = budget;
    }

    public String getDestination() {
        return destination;
    }

    public Date getDateDepart() {
        return dateDepart;
    }

    public Date getDateRetour() {
        return dateRetour;
    }

    public double getBudget() {
        return budget;
    }

    public void setDestination(String destination) {
        this.destination = destination;
    }

    public void setDateDepart(Date dateDepart) {
        this.dateDepart = dateDepart;
    }

    public void setDateRetour(Date dateRetour) {
        this.dateRetour = dateRetour;
    }

    public void setBudget(double budget) {
        this.budget = budget;
    }

    @Override
    public String toString() {
        return "Voyage{" +
                "destination='" + destination + '\'' +
                ", dateDepart=" + dateDepart +
                ", dateRetour=" + dateRetour +
                ", budget=" + budget +
                '}';
    }
}
