package model;



import org.hibernate.annotations.NaturalId;


import javax.persistence.*;
import java.sql.Blob;
import java.util.Date;
import java.util.List;

@Entity

@Table(name = "users", uniqueConstraints = { @UniqueConstraint(columnNames = { "username" }),
        @UniqueConstraint(columnNames = { "email" }) })
public class User {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;


    private String username;

    @NaturalId(mutable = true)

    private String email;


    private String password;



    @ManyToOne
    @JoinColumn(name = "role_id")
    private Role role;



    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public Role getRole() {
        return role;
    }

    public void setRole(Role role) {
        this.role = role;
    }

    public User(String username,
                String email, String password,
                Role role) {
       /* this.id = id;*/
        this.username = username;
        this.email = email;
        this.password = password;
        this.role = role;
    }

    public User() {
    }



}