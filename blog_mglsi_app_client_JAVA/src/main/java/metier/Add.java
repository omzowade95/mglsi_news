package metier;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextField;
import dao.IRole;
import dao.RoleImpl;
import dao.UserDao;
import dao.UserDaoImpl;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import model.Role;
import model.User;
import tools.Outils;

import java.io.IOException;
import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;

public class Add implements Initializable {

    @FXML
    private JFXTextField nomtxt;

    @FXML
    private JFXTextField mdptxt;

    @FXML
    private JFXTextField emailtxt;

    @FXML
    private JFXComboBox<Role> rolecbx;

    @FXML
    private JFXButton ajoutbtn;

    IRole iRole;

    UserDao userDao = new UserDaoImpl();

    @FXML
    public void back(ActionEvent actionEvent) throws IOException {
        String url = "/pages/ussers.fxml";
        Outils.load(actionEvent, url);
    }


    @FXML
    void add(ActionEvent event) throws IOException {
            String nom = nomtxt.getText();
            String password = mdptxt.getText();
            String email = emailtxt.getText();
            Role role = rolecbx.getValue();

            if (nom.trim().equals("") || password.trim().equals("") || email.trim().equals("") || role == null){
                Outils.showErrorMessage("Erreur","Données non ajoutée : Veuillez remplir tous les champs");
            }else{
                User adding = new User(nom,email,password,role);
                try{
                    userDao.add(adding);
                    String url = "/pages/ussers.fxml";
                    Outils.showConfirmationMessage("Success","Utilistauer ajouté");
                    Outils.load(event,url);
                }catch (Exception e){
                    e.printStackTrace();
                }
            }



    }
    @Override
    public void initialize(URL location, ResourceBundle resources) {

        iRole = new RoleImpl();
        List<Role> list = iRole.list();
        ObservableList<Role> listec = FXCollections.observableArrayList(list);
        rolecbx.setItems(listec);
    }
}
