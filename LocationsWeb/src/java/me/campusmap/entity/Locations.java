/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package me.campusmap.entity;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author Mourique
 */
@Entity
@Table(name = "locations")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "Locations.findAll", query = "SELECT l FROM Locations l"),
    @NamedQuery(name = "Locations.findByName", query = "SELECT l FROM Locations l WHERE l.name = :name"),
    @NamedQuery(name = "Locations.findByLat", query = "SELECT l FROM Locations l WHERE l.lat = :lat"),
    @NamedQuery(name = "Locations.findByLng", query = "SELECT l FROM Locations l WHERE l.lng = :lng"),
    @NamedQuery(name = "Locations.findByBuildingID", query = "SELECT l FROM Locations l WHERE l.buildingID = :buildingID")})
public class Locations implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 50)
    @Column(name = "name")
    private String name;
    @Basic(optional = false)
    @NotNull
    @Column(name = "lat")
    private double lat;
    @Basic(optional = false)
    @NotNull
    @Column(name = "lng")
    private double lng;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 7)
    @Column(name = "buildingID")
    private String buildingID;

    public Locations() {
    }

    public Locations(String name) {
        this.name = name;
    }

    public Locations(String name, double lat, double lng, String buildingID) {
        this.name = name;
        this.lat = lat;
        this.lng = lng;
        this.buildingID = buildingID;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public double getLat() {
        return lat;
    }

    public void setLat(double lat) {
        this.lat = lat;
    }

    public double getLng() {
        return lng;
    }

    public void setLng(double lng) {
        this.lng = lng;
    }

    public String getBuildingID() {
        return buildingID;
    }

    public void setBuildingID(String buildingID) {
        this.buildingID = buildingID;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (name != null ? name.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Locations)) {
            return false;
        }
        Locations other = (Locations) object;
        if ((this.name == null && other.name != null) || (this.name != null && !this.name.equals(other.name))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "me.campusmap.entity.Locations[ name=" + name + " ]";
    }
    
}
