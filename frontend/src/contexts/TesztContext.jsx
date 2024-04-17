import { createContext, useContext, useState } from "react";
import axios from "../api/axios";

const TesztContext = createContext();

export const useTesztContext = () => useContext(TesztContext);

export const TesztProvider = ({ children }) => {
  const [teszt, setTeszt] = useState([]);
  const [kategoria, setKategoria] = useState([]);

  const getKategoria = async () => {
    try {
      const { data } = await axios.get("api/kategoria");
      setKategoria(data);
      console.log(data);
    } catch (error) {
      console.log(error);
    }
  };

  const getTeszt = async () => {
    try {
      const { data } = await axios.get("api/teszt");
      setTeszt(data);
      console.log(data);
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <TesztContext.Provider
      value={{
        getTeszt,
        teszt,
        setTeszt,
        getKategoria,
        setKategoria,
        kategoria,
      }}
    >
      {children}
    </TesztContext.Provider>
  );
};
