package com.tqphuc.service;

import java.util.List;

import com.tqphuc.model.KhachhangModel;

public interface IKhachhangService {
	List<KhachhangModel> findAll();
	KhachhangModel save(KhachhangModel khachhangModel);
}
