package dao;

import model.Role;
import model.User;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import java.util.List;

public class RoleImpl implements IRole{
    private EntityManagerFactory entityManagerFactory = Persistence.createEntityManagerFactory("mglsi_news");
    private EntityManager entityManager = entityManagerFactory.createEntityManager();

    @Override
    public List<Role> list() {
        List<Role> individus = null;
        individus = entityManager.createNativeQuery("select * from roles", Role.class)
                .getResultList();
        return  individus;

    }
}
