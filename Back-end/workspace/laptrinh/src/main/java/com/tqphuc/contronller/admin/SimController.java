package com.tqphuc.contronller.admin;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(urlPatterns  = {"/admin-sim-list" })
public class SimController extends HttpServlet{

	private static final long serialVersionUID = -1853184036561232437L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
		
		  RequestDispatcher rd = request.getRequestDispatcher("/views/admin/sim/list.jsp");
		  rd.forward(request, response);
		 
	}
	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
		
	}

}
