import {Link, Navigate, Outlet} from "react-router-dom";
import {useStateContext} from "../context/ContextProvider";
import axiosClient from "../axios-client.js";
import {useEffect} from "react";
import index from '../index.css';
import Home from "../views/Home";


export default function DefaultLayout() {

  return (
 
    <>
    <div className="body">

   
    <header id="header" className="fixed-top">

    <div className="container d-flex align-items-center justify-content-between">

      <h1 className="logo"><a href="#">Alph4Tech</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><Link className="nav-link scrollto active" href="#Home">Home</Link></li>
          <li><Link className="nav-link scrollto" href="#about">About</Link></li>
          <li><Link className="nav-link scrollto" href="#users">Users</Link></li>
          <li><Link className="nav-link scrollto " href="#portfolio">Portfolio</Link></li>
          <li><Link className="nav-link scrollto" href="#team">Team</Link></li>
          <li><Link className="nav-link scrollto" href="#contact">Contact</Link></li>
          <li><Link className="nav-link scrollto" href="#posts">Posts</Link></li>

          </ul>
        <i className="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
    
  </header>
   <main>
     <Outlet/>
   </main>


  
  </div>
  </>

   
  )
}










  
  // const {user, token, setUser, setToken, notification} = useStateContext();

  // if (!token) {
  //   return <Navigate to="/login"/>
  // }

  // const onLogout = ev => {
  //   ev.preventDefault()

  //   axiosClient.post('/logout')
  //     .then(() => {
  //       setUser({})
  //       setToken(null)
  //     })
  // }

  // useEffect(() => {
  //   axiosClient.get('/user')
  //     .then(({data}) => {
  //        setUser(data)
  //     })
  // }, [])

  

 // <div id="defaultLayout">
    //   <aside>
    //     <Link to="/dashboard">Dashboard</Link>
    //     <Link to="/users">Users</Link>
    //   </aside>
    //   <div className="content">
    //     <header>
    //       <div>
    //         Header
    //       </div>

    //     </header>
    //     <main>
    //       <Outlet/>
    //     </main>
    //     {notification &&
    //       <div className="notification">
    //         {notification}
    //       </div>
    //     }
    //   </div>
    // </div>