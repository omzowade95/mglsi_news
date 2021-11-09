package metier;

import clojure.lang.Compiler;
import com.jfoenix.controls.JFXButton;
import dao.UserDao;
import dao.UserDaoImpl;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import model.User;
import tools.Outils;

import java.io.IOException;
import java.net.URL;
import java.util.List;
import java.util.Observable;
import java.util.Optional;
import java.util.ResourceBundle;

public  class LogIn  implements Initializable {

    @FXML
    private  TableView<User> usertable;

    @FXML
    private TableColumn<User, Long> idcolumn;

    @FXML
    private TableColumn<User, String> usernamecolumn;

    @FXML
    private TableColumn<User, String> mdpcolumn;

    @FXML
    private TableColumn<User, String> emailcolumn;

    @FXML
    private TableColumn<User, String> rolecolumn;

    @FXML
    private ImageView profilimg;

    @FXML
    private Label adminilabel;

    @FXML
    private JFXButton deletebtn;

    @FXML
    private JFXButton updatebtn;

    @FXML
    private JFXButton logoutbtn;

    @FXML
    private JFXButton addbtn;

    UserDao userDao = new UserDaoImpl();
     private static User user = null;

     public  static User getUser(){
         return user;
     }

    @FXML
    void add(ActionEvent event)  throws  IOException{
        String url = "/pages/add.fxml";
        Outils.load(event, url);

    }


    @FXML
    void delete(ActionEvent event) throws IOException {
        Boolean bool = false;
        try {
            if (usertable.getSelectionModel().getSelectedItem() != null) {
                user = usertable.getSelectionModel().getSelectedItem();
                String contentText = "Voulez vous supprimer "+user.getUsername()+" ?";
                Boolean del = false;
                ButtonType valider = new ButtonType("valider", ButtonBar.ButtonData.OK_DONE);
                ButtonType annuler = new ButtonType("annuler", ButtonBar.ButtonData.CANCEL_CLOSE);
                Alert alert = new Alert(Alert.AlertType.WARNING,
                        contentText,
                        valider,
                        annuler);
                alert.setTitle("Suppression");
                Optional<ButtonType> result = alert.showAndWait();
                if (result.orElse(valider) != annuler) {
                    userDao.delete(user);
                    Outils.showInformationMessage("Success", "Utilisateur supprime");
                    String url = "/pages/ussers.fxml";
                    Outils.load(event,url);
                }

                bool = true;
            }


        }catch(Exception e){
            e.printStackTrace();
        }

    }



    @FXML
    void disconnet(ActionEvent event) throws IOException {
        String url = "/pages/acceuil.fxml";
        Outils.load(event,url);

    }

    @FXML
    void update(ActionEvent event) throws IOException {
        String url = "/pages/update.fxml";
        if (usertable.getSelectionModel().getSelectedItem() != null) {
            user = usertable.getSelectionModel().getSelectedItem();
            System.out.println(user.toString());
            Outils.load(event,url);
        }else{
            Outils.showErrorMessage("Erreur", "Veuillez choisir un utilisateur a modifier");
        }
    }

    public  User onEdit() {
        // check the table's selected item and get selected item
        return user;
    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        adminilabel.setText("Bienvenue Omar");
        ObservableList<User> list = FXCollections.observableArrayList (userDao.listeArrondissement());
        usertable.setItems(list);
        idcolumn.setCellValueFactory(new PropertyValueFactory<>("id"));
        usernamecolumn.setCellValueFactory(new PropertyValueFactory<>("username"));
        mdpcolumn.setCellValueFactory(new PropertyValueFactory<>("password"));
        emailcolumn.setCellValueFactory(new PropertyValueFactory<>("email"));
        rolecolumn.setCellValueFactory(new PropertyValueFactory<>("role"));


    }
}
