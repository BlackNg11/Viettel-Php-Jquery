package com.tqphuc.controller.web;

import java.io.IOException;

import javax.inject.Inject;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.tqphuc.model.KhachhangModel;
import com.tqphuc.service.IKhachhangService;
import com.tqphuc.service.ISimService;

@WebServlet(urlPatterns = { "/trang-chu" })
public class HomeController extends HttpServlet {

	@Inject
	private ISimService simService;
	
	@Inject
	private IKhachhangService khService;

	private static final long serialVersionUID = -1853184036561232437L;

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		request.setAttribute("sims", simService.findAll());
		RequestDispatcher rd = request.getRequestDispatcher("/views/web/home.jsp");
		rd.forward(request, response);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		int sdt = Integer.parseInt(request.getParameter("sdt")) ;
//		String sdt = request.getParameter("sdt");
		String diachi = request.getParameter("diachi");
		String dichvu = request.getParameter("dichvu");
		
		KhachhangModel khachhangModel = new KhachhangModel();
		khachhangModel.setSoDt(sdt);
		khachhangModel.setDiaChi(diachi);
		khachhangModel.setDichVu(dichvu);
		
		khService.save(khachhangModel);
		
		request.setAttribute("kh", khService.findAll());
		RequestDispatcher rd = request.getRequestDispatcher("/views/web/home.jsp");
		rd.forward(request, response);
	}
}
