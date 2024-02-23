import {BrowserRouter, Routes, Route} from "react-router-dom";
import SingerList from "./components/SingerList";
import AddSinger from "./components/AddSinger";
import EditSinger from "./components/EditSinger";

function App() {
  return (
    <div className="container">
		<BrowserRouter>
			<Routes>
				<Route path="/" element={<SingerList/>}/> 
				<Route path="/add" element={<AddSinger/>}/> 
				<Route path="/edit/:id" element={<EditSinger/>}/> 
			</Routes>
		</BrowserRouter>
    </div>
  );
}

export default App;
