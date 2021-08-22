import logo from './logo.svg';
import './App.css';
import routes from './routes';
import Header from './components/Header';
import AllEmployee from './pages/AllEmployee';
import EditEmployee from './pages/EditEmployee';
import RegisterEmployee from './pages/RegisterEmployee';
import CreateProduct from './pages/CreateProduct';
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom'

function App() {

  const register = async (e, employee) => {
    e.preventDefault()
    var result = await fetch(routes.registerEmployee, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: employee
    })
    console.log(result)
  }
  const create = async (e, product) => {
    e.preventDefault()
    var result = await fetch(routes.createProduct, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: product
    })
    console.log(result)
  }

  return (
    <Router>
      <div className="App">
          <Header />
          <Switch>
            <Route path="/" exact component={AllEmployee} />
            <Route path="/employee/register" exact>
              <RegisterEmployee register={register} />
            </Route>
            <Route path="/employee/edit/:id" exact component={EditEmployee} />
            <Route path="/product/create">
              <CreateProduct create={create} />
            </Route>
          </Switch>     
      </div>
    </Router>
  );
}

export default App;
