import './App.css';
import Name from './components/Name/Name';
import Description from './components/Description/Description';
import Section from './components/Section/Section';


function App() {
  const userInformation = {
    firstname: 'Jerico',
    lastname: 'Estanisla',
    section: 'BSIT-3A',
    description: "3rd year IT student at DYCI"
  }
  return (
    <div className="App">
      <Name firstname={userInformation.firstname} lastname={userInformation.lastname}/>
      <Section section={userInformation.section}/>
      <Description description={userInformation.description}/>
    </div>
  );
}

export default App;

