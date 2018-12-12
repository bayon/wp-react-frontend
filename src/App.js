import React, { Component } from 'react';
import './App.css';
import Post from './components/themes/theme-one/Post'

class App extends Component {
  constructor() {
    super();
  }
  
render() {
  
  return (
      <div className="App">
          <h1>WP</h1>
          <h3>React Frontend with Wordpress Backend.</h3>
           <Post  ></Post>
          <hr/>
          <p>to do:</p>
            <ul>
              <li>crud via rest api</li>
              <li>files like wp</li>
            </ul>
          
      </div>
  )
}
}

export default App;
