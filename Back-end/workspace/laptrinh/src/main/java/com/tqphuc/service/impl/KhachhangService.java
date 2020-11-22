package com.tqphuc.service.impl;

import java.util.List;

import javax.inject.Inject;

import com.tqphuc.dao.IKhachangDAO;
import com.tqphuc.model.KhachhangModel;
import com.tqphuc.service.IKhachhangService;

public class KhachhangService implements IKhachhangService {

	@Inject
	private IKhachangDAO khachangDAO;

	@Override
	public List<KhachhangModel> findAll() {
		return khachangDAO.findAll();
	}

	@Override
	public KhachhangModel save(KhachhangModel khachhangModel) {
		Long khachhangId = khachangDAO.save(khachhangModel);
		System.out.print(khachhangId);
		return null;
	}
}
