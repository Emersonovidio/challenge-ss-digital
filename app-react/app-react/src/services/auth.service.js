import axios from "axios";

const authService = {
  // Salva o usuário no local storage
  setLoggedUser: (data) => {
    localStorage.setItem("user", JSON.stringify(data));
  },

  // Recupera o usuário do local storage
  getLoggedUser: () => {
    let data = localStorage.getItem("user");
    if (!data) return null;

    try {
      let parsedData = JSON.parse(data);
      return parsedData;
    } catch (error) {
      console.log("Error parsing data", error);
      return null;
    }
  },
};

export default authService;
