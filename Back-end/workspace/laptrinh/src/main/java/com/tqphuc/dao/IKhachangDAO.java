package com.tqphuc.dao;

import java.util.List;

import com.tqphuc.model.KhachhangModel;

public interface IKhachangDAO extends GenericDAO<KhachhangModel>{
	List<KhachhangModel> findAll();
	/* List<SimModel> findBySimId(Long simId); */
	Long save(KhachhangModel khachangModel);
	void update(KhachhangModel khachangModel);
	void delete(KhachhangModel khachangModel);
}
