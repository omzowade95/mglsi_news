package dao;

import model.User;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.RollbackException;
import java.util.List;

public class UserDaoImpl implements UserDao{

    private EntityManagerFactory entityManagerFactory = Persistence.createEntityManagerFactory("mglsi_news");
    private EntityManager entityManager = entityManagerFactory.createEntityManager();

    public UserDaoImpl(){}

    @Override
    public void add(User f) {
        entityManager.getTransaction().begin();
        if(f!=null)
            entityManager.persist(f);
            entityManager.getTransaction().commit();
        //entityManager.getTransaction().rollback();


    }

    @Override
    public void update(User f) {

    }

    @Override
    public void delete(User f) {
        entityManager.getTransaction().begin();
        if(f!=null)
            entityManager.remove(f);
        entityManager.getTransaction().commit();
        //entityManager.getTransaction().rollback();


    }


    @Override
    public List<User> listeArrondissement() {
        List<User> individus = null;
        individus = entityManager.createNativeQuery("select * from users", User.class)
                .getResultList();
        return  individus;
    }



    @Override
    public User connectUser(String username, String password) {
        String book = null ;
        String query = "SELECT * FROM users WHERE username = username";
         User u =  null;
        try {
            u = (User) entityManager.createQuery(query).setParameter("username", username).getSingleResult();

        } catch (Exception e) {
            e.printStackTrace();
        }

        return u ;    }
}
