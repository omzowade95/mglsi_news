package model;


import org.hibernate.annotations.NaturalId;


import javax.persistence.*;
import java.util.List;

@Entity

@Table(name = "roles")
public class Role {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    @Enumerated(EnumType.STRING)
    @NaturalId
    @Column(length = 60)
    private RoleName name;

    @OneToMany(mappedBy = "role")
    private List<User> users;

    public Role(RoleName name) {
        this.name = name;
    }

    @Override
    public String toString() {
        return name.toString();
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public RoleName getName() {
        return name;
    }

    public void setName(RoleName name) {
        this.name = name;
    }

    public List<User> getUsers() {
        return users;
    }

    public void setUsers(List<User> users) {
        this.users = users;
    }

    public Role(Object o, String role_user) {
    }
    public Role() {
    }



}
