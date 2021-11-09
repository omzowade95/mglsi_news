package metier;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextField;
import dao.IRole;
import dao.RoleImpl;
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

public class Update implements Initializable {

    IRole iRole;
    LogIn log  ;

    @FXML
    private JFXTextField nomtxt;

    @FXML
    private JFXTextField mdptxt;

    @FXML
    private JFXTextField emailtxt;

    @FXML
    private JFXComboBox<Role> rolecbx;

    @FXML
    private JFXButton updatebtn;

    @FXML
    private JFXButton retourbrtn;

    @FXML
    void back(ActionEvent event) throws IOException {
        String url = "/pages/ussers.fxml";
        Outils.load(event, url);
    }

    @FXML
    void update(ActionEvent event) {

    }

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        iRole = new RoleImpl();
        List<Role> list = iRole.list();
        ObservableList<Role> listec = FXCollections.observableArrayList(list);
        rolecbx.setItems(listec);
        User getUser = LogIn.getUser();
        //System.out.println(getUser.toString());
        if (getUser != null){
            nomtxt.setText(getUser.getUsername());
            mdptxt.setText(getUser.getPassword());
            emailtxt.setText(getUser.getEmail());
        }else{
            System.out.println("bakhoul dhs");
        }

    }
}
