import "./App.css";
import { useTesztContext } from "./contexts/TesztContext";
import { useEffect } from "react";

function App() {
  const { getTeszt, teszt, setTeszt, getKategoria, setKategoria, kategoria } =
    useTesztContext();

  useEffect(() => {
    getTeszt(), getKategoria();
  }, []);

  const tesztKerdes = () => {
      <table>
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
      </table>
  };

  console.log(kategoria);

  return (
    <>
      <form>
        <select id="tevekenyseg" name="tevekenyseg">
          <option value="kateg1">{kategoria[0]["kategorianev"]}</option>
          <option value="kateg2">{kategoria[1]["kategorianev"]}</option>
          <option value="kateg3">{kategoria[2]["kategorianev"]}</option>
        </select>
        <button type="submit" onClick={tesztKerdes()}>
          Küld
        </button>
      </form>
    </>
  );
}

export default App;
