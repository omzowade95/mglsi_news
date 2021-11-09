package dao;

import model.User;

import java.util.List;

public interface UserDao  {
    public void add(User f);

    public void update(User f);

    public void delete(User idF);

    public List<User> listeArrondissement();


    public User connectUser(String username , String password);
}
