package com.tqphuc.contronller.admin.api;

import java.io.IOException;

import javax.inject.Inject;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.fasterxml.jackson.databind.ObjectMapper;
import com.tqphuc.model.SimModel;
import com.tqphuc.service.ISimService;
import com.tqphuc.utils.HttpUtil;

@WebServlet(urlPatterns = { "/api-admin-sim" })
public class SimAPI extends HttpServlet {

	@Inject
	private ISimService simService;

	private static final long serialVersionUID = 1L;

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		ObjectMapper mapper = new ObjectMapper();
		request.setCharacterEncoding("UTF-8");
		response.setContentType("application/json");
		SimModel simModel = HttpUtil.of(request.getReader()).toModel(SimModel.class);
		simModel = simService.save(simModel);
		mapper.writeValue(response.getOutputStream(), simModel);
	}

	protected void doPut(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

	}

	protected void doDelete(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

	}
}
